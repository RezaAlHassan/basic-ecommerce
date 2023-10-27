<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product : GW</title>

</head>
<body>
  <main>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul style="color: red">
            @foreach ($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (Session::has('notif.success'))
            <div class="bg-blue-300 mt-2 p-4">
                {{-- if it's there then print the notification --}}
                <span class="text-white">{{ Session::get('notif.success') }}</span>
            </div>
@endif
<br>
  
       <img src='{{asset('media/logo-gw.png')}}' height="24" width="24"> 
       <a style="padding-left:10px; " href="/product">product Table</a>
     </a>
     <br>
     <div class="col-md-6 offset-md-3 mt-5">
     <h1>Create Product</h1>
     <form accept-charset="UTF-8" id="productForm" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
       <div class="form-group">
         <label for="exampleInputName">product name</label>
         <input type="text" name="name" class="form-control" id="product_name" placeholder="product name">
       </div>
       <div class="form-group">
         <label for="exampleInputEmail1" required="required">Description</label>
         <input type="text" name="description" class="form-control" id="exampleInputEmail1"  placeholder="description">
       </div>
       <div class="form-group">
        <label for="exampleInputEmail1" required="required">Category</label>
        <input type="text" name="category" class="form-control" placeholder="T-Shirt">
      </div>
       <div class="form-group">
        <label for="exampleInputEmail1" required="required">Price</label>
        <input type="number" name="price" class="form-control" id="exampleInputEmail1"  placeholder="price" >
      </div>
       <hr>
       <div class="form-group mt-3">
         <label class="mr-2">Upload thumbnail/main image:</label>
         <input type="file" name="image">
       </div>
       <hr>
       <button type="submit" class="btn btn-primary">Submit</button>
     </form>
 </div> 
    
  </main>

</body>
</html>