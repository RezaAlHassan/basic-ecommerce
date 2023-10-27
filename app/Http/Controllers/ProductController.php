<?php

namespace App\Http\Controllers;

//use App\Imports\ProductsImport;
use App\Models\Product;
use App\Models\Review;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;

//use Excel;

class ProductController extends Controller
{


    public function index(): Response
    {
        return response()->view('product.index', [
            'products' => Product::orderBy('updated_at', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response()->view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // put image in the public storage
            $filePath = Storage::disk('public')->put('images/products/featured-images', request()->file('image'));
            $validated['image'] = $filePath;
        }

        // insert only requests that already validated in the StoreRequest
        $create = Product::create($validated);

        if ($create) {
            // add flash for the success notification
            session()->flash('notif.success', 'product created successfully!');
            return redirect()->route('product.index');
        }

        return abort(500);
    }

    /*
        public function show(string $id): Response
    {
        return response()->view('product.show', [
            'product' => Product::findOrFail($id),
        ]);
    }
     
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        return response()->view('product.edit', [
            'product' => Product::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // delete image
            Storage::disk('public')->delete($product->image);

            $filePath = Storage::disk('public')->put('images/products/featured-images', request()->file('image'), 'public');
            $validated['image'] = $filePath;
        }

        $update = $product->update($validated);

        if ($update) {
            session()->flash('notif.success', 'product updated successfully!');
            return redirect()->route('product.index');
        }

        return abort(500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $product = Product::findOrFail($id);

        Storage::disk('public')->delete($product->image);

        $delete = $product->delete($id);

        if ($delete) {
            session()->flash('notif.success', 'product deleted successfully!');
            return redirect()->route('product.index');
        }

        return abort(500);
    }

    /*public function import(Request $request)
    {
        $file = $request->file('products');

        Excel::import(new ProductsImport, $file);

        return redirect()->route('products.index');
    }*/

    public function reviewstore(Request $request)
    {
        $review = new Review();
        $review->product_id = $request->product_id;
        $review->comment = $request->comment;
        $review->user_name = Auth::user()->name;
        $review->save();
        return redirect()->back()->with('success', 'Your review has been submitted Successfully,');
    }

    /* public function allReviews(string $id)
    {
        $reviews = Review::all();
        return view('product-description', [compact('reviews')]);
    }

    public function productDetails(string $id)
    {
        return response()->view('product-description', [
            'product' => Product::findOrFail($id),
        ]);
    }*/
    public function productDetails(string $id)
    {
        $product = Product::findOrFail($id);
        $reviews = Review::where('product_id', $id)->get();

        return view('product-description', [
            'product' => $product,
            'reviews' => $reviews,
        ]);
    }
}
