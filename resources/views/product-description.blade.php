
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
  <body>

<header>
    <!-- Jumbotron -->
    <div class="p-3 text-center bg-white border-bottom">
      <div class="container">
        <div class="row gy-3">
          <!-- Left elements -->
          <div class="col-lg-2 col-sm-4 col-4">
            <a href="/shop" target="_blank" class="float-start">
              <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="35" />
            </a>
          </div>
          <!-- Left elements -->
  
          <!-- Center elements -->
          <div class="order-lg-last col-lg-5 col-sm-8 col-8">
            <div class="d-flex float-end">
              <a href="/login" class="mr-3 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
                 <img width="20" height="20" src="https://img.icons8.com/material-rounded/24/user.png" alt="user"/><p class="d-none d-md-block mx-2 mb-0">Sign in</p> </a>
              <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="mr-3  border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank">
                 <img width="20" height="20" src="https://img.icons8.com/ios-filled/50/like--v1.png" alt="like--v1"/><p class="d-none mx-2 d-md-block mb-0">Wishlist</p> </a>
                 <a href="/cart" class="mr-3  border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> 
                    <i class="mr-2 fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="ml-2 badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span> 
                  </a>
            </div>
          </div>
          <!-- Center elements -->
  
          <!-- Right elements -->
          <div class="col-lg-5 col-md-12 col-12">
            <div class="input-group float-center">
              <div class="form-outline">
                <input type="search" id="form1" class="form-control" />
                <label class="form-label" for="form1">Search</label>
              </div>
              <button type="button" class="btn btn-primary shadow-0">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
          <!-- Right elements -->
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  
    <!-- Heading -->
    <div class="bg-primary">
      <div class="container py-4">
        <!-- Breadcrumb -->
        <nav class="d-flex">
          <h6 class="mb-0">
            <a href="" class="text-white-50">Home</a>
            <span class="text-white-50 mx-2"> > </span>
            <a href="" class="text-white-50">Library</a>
            <span class="text-white-50 mx-2"> > </span>
            <a href="" class="text-white"><u>Data</u></a>
          </h6>
        </nav>
        <!-- Breadcrumb -->
      </div>
    </div>
    <!-- Heading -->
  </header>
  
  <!-- content -->
  <section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">
            <a href="#" class="">
                <img src="{{ isset($product) ? Storage::url($product->image) : '' }}" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
              </a>
          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <h4 class="title text-dark">
                {{ $product->name }}
            </h4>
            <div class="d-flex flex-row my-3">
              <div class="text-warning mb-1 me-2">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-1">
                  4.5
                </span>
              </div>
            </div>
  
            <div class="mb-3">
              <span class="h5">{{ $product->price }}</span>
              <span class="text-muted">/per box</span>
            </div>
  
            <p>
                {{ $product->description }}
            </p>
  
            <div class="row">
              <dt class="col-3">Category:</dt>
              <dd class="col-9">{{ $product->category }}</dd>
  
              <dt class="col-3">Color</dt>
              <dd class="col-9">Brown</dd>
  
              <dt class="col-3">Material</dt>
              <dd class="col-9">Cotton, Jeans</dd>
  
              <dt class="col-3">Brand</dt>
              <dd class="col-9">Reebook</dd>
            </div>
  
            <hr />
  
            <div class="row mb-4">
              <div class="col-md-4 col-6">
                <label class="mb-2">Size</label>
                <select class="form-select border border-secondary" style="height: 35px;">
                  <option>Small</option>
                  <option>Medium</option>
                  <option>Large</option>
                </select>
              </div>
              <!-- col.// -->

            </div>
            <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
            <a href="/cart" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
            <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>
          </div>
        </main>
      </div>
    </div>
  </section>
  <!-- content -->
<style>
  .amazing-reviews {
    font-size: 12pt;
  }
  .amazing-reviews blockquote {
    font-family: Myriad, Helvetica, 'Lucida Grande', 'DejaVu Sans Condensed', 'Liberation Sans', 'Nimbus Sans L', Tahoma, Geneva, Arial, sans-serif;
    padding: 0;
    background: white;
    margin: 30px 0 0 0;
    border: 1px solid #ddd;
    border-radius: 3px;
    padding: 15px 15px 10px 15px;
    position: relative;
    box-shadow: rgba(0,0,0,.025) 0 3px 20px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
    cursor: default;
  }
  .amazing-reviews blockquote:before {
    content: '';
    display: block;
    border: 20px solid transparent;
    border-top-color: #ccc;
    position: absolute;
    top: 100%;
    left: 20px;
    z-index: 250;
    background: transparent;
    height: 0;
    opacity: 1;
  }
  .amazing-reviews blockquote:nth-of-type(even):before {
    left: auto;
    right: 20px;
  }
  .amazing-reviews blockquote:after {
    content: '';
    display: block;
    border: 19px solid transparent;
    border-top-color: white;
    position: absolute;
    top: 100%;
    left: 21px;
    z-index: 500;
  }
  .amazing-reviews blockquote:nth-of-type(even):after {
    left: auto;
    right: 21px;
  }
  .amazing-reviews blockquote:last-of-type {
    margin-bottom: 45px;
  }
  .amazing-reviews blockquote header span i {
    color: white;
    text-shadow: #aaa 1px 0 0, #aaa 0 1px 0, #aaa -1px 0 0, #aaa 0 -1px 0;
  }
  .amazing-reviews blockquote header span[data-rating="1"] i:nth-child(-n+1),
  .amazing-reviews blockquote header span[data-rating="2"] i:nth-child(-n+2),
  .amazing-reviews blockquote header span[data-rating="3"] i:nth-child(-n+3),
  .amazing-reviews blockquote header span[data-rating="4"] i:nth-child(-n+4),
  .amazing-reviews blockquote header span[data-rating="5"] i:nth-child(-n+5) {
    color: #f0c96a;
    text-shadow: #c08036 1px 0 0, #c08036 0 1px 0, #c08036 -1px 0 0, #c08036 0 -1px 0;
  }
  .amazing-reviews blockquote strong {
    color: black;
    display: inline;
  }
  .amazing-reviews strong + span {
    margin-left: -3px;
  }
  .amazing-reviews blockquote strong + span + span {
    display: block;
    margin: 5px 0;
  }
  .amazing-reviews blockquote span em {
    font-style: normal;
    font-weight: bold;
    color: #155096;
    text-decoration: underline;
  }
  .amazing-reviews blockquote span:last-of-type {
    color: #e47d21;
    font-size: 10pt;
    font-weight: bold;
    display: block;
  }
  .amazing-reviews blockquote p {
    font-size: 12pt;
    font-style: normal;
    margin: 5px 0 0 0;
    color: black;
  }
  .amazing-reviews h2:last-of-type {
    background: #eee;
    text-align: center;
    font-weight: 400;
    padding: 15px;
    margin: 0;
    border: 1px solid #ccc;
    position: relative;
  }
  .amazing-reviews h2 q,
  .amazing-reviews h2 strong {
    font-weight: 600;
  }
  @media (min-width: 400px) {
    .amazing-reviews h2:last-of-type {
      font-size: 24pt;
    }
  }
  @media (min-width: 700px) {
    .amazing-reviews blockquote {
      width: 75%;
      margin: 30px 15px 0 15px;
    }
    .amazing-reviews blockquote:nth-of-type(even) {
      margin-left: calc(25% - 15px);
    }
    .amazing-reviews h2:last-of-type {
      font-size: 28pt;
    }
  }
  @media (min-width: 700px) {
    .amazing-reviews .quote-container {
      width: 100%;
      padding: 0 75px;
    }
  }
</style>
  <div><h1>Reviews</h1></div>
  <div class="border">Your review
    <form action="{{ route('reviews.store') }}" method="post">
      @csrf
  
      <div class="form-group">
          <input type="hidden" class="form-control" name="product_id" id="product_id" value={{$product->id}}>
      </div>
      <div class="form-group">
          <label for="comment">Comment</label>
          <textarea class="form-control" name="comment" id="comment" rows="3">This product is great!</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit Review</button>
  </form>
  </div>
<div class=amazing-reviews>
  @foreach($reviews as $review)
  <blockquote>
    <header>
      <span data-rating=5>
        <i class=ion-star></i>
        <i class=ion-star></i>
        <i class=ion-star></i>
        <i class=ion-star></i>
        <i class=ion-star></i>
      </span>
      <strong>{{$review->comment}}</strong>
      <span>, January 30</span>
      <span>By <em>{{$review->user_name}}</em></span>
      <span>Verified Purchase</span>
    </header>
  </blockquote>
  @endforeach
</div>
  

  <!-- Footer -->
  <footer class="text-center text-lg-start text-muted bg-primary mt-3">
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start pt-4 pb-4">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-12 col-lg-3 col-sm-12 mb-2">
            <!-- Content -->
            <a href="https://mdbootstrap.com/" target="_blank" class="text-white h2">
              MDB
            </a>
            <p class="mt-1 text-white">
              © 2023 Copyright: MDBootstrap.com
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-6 col-sm-4 col-lg-2">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-2">
              Store
            </h6>
            <ul class="list-unstyled mb-4">
              <li><a class="text-white-50" href="#">About us</a></li>
              <li><a class="text-white-50" href="#">Find store</a></li>
              <li><a class="text-white-50" href="#">Categories</a></li>
              <li><a class="text-white-50" href="#">Blogs</a></li>
            </ul>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-6 col-sm-4 col-lg-2">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-2">
              Information
            </h6>
            <ul class="list-unstyled mb-4">
              <li><a class="text-white-50" href="#">Help center</a></li>
              <li><a class="text-white-50" href="#">Money refund</a></li>
              <li><a class="text-white-50" href="#">Shipping info</a></li>
              <li><a class="text-white-50" href="#">Refunds</a></li>
            </ul>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-6 col-sm-4 col-lg-2">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-2">
              Support
            </h6>
            <ul class="list-unstyled mb-4">
              <li><a class="text-white-50" href="#">Help center</a></li>
              <li><a class="text-white-50" href="#">Documents</a></li>
              <li><a class="text-white-50" href="#">Account restore</a></li>
              <li><a class="text-white-50" href="#">My orders</a></li>
            </ul>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-12 col-sm-12 col-lg-3">
            <!-- Links -->
            <h6 class="text-uppercase text-white fw-bold mb-2">Newsletter</h6>
            <p class="text-white">Stay in touch with latest updates about our products and offers</p>
            <div class="input-group mb-3">
              <input type="email" class="form-control border" placeholder="Email" aria-label="Email" aria-describedby="button-addon2" />
              <button class="btn btn-light border shadow-0" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                Join
              </button>
            </div>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  

  </footer>
  <!-- Footer -->
</body>
</html>
  