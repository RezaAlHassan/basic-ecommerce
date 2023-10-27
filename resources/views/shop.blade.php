
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
            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
            <div class="row gy-3">
              <!-- Left elements -->
              <div class="col-lg-2 col-sm-4 col-4">
                <a href="https://mdbootstrap.com/" target="_blank" class="float-start">
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
      
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5f5f5;">
          <!-- Container wrapper -->
          <div class="container justify-content-center justify-content-md-between">
            <!-- Toggle button -->
            <button
                    class="navbar-toggler border text-dark py-2"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarLeftAlignExample"
                    aria-controls="navbarLeftAlignExample"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    >
              <i class="fas fa-bars"></i>
            </button>
      
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
              <!-- Left links -->
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link text-dark" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Categories</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Hot offers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark" href="#">Projects</a>
                </li>

                <!-- Navbar dropdown -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-dark mb-0" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                    Others
                  </a>
                  <!-- Dropdown menu -->
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                      <a class="dropdown-item" href="#">Action</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">Another action</a>
                    </li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- Left links -->
            </div>
          </div>
          <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
      </header>

      <!-- category -->
      <section>
        <div class="container pt-5">
          <nav class="row gy-4">
            <div class="col-lg-6 col-md-12">
              <div class="row">
                <div class="col-3">
                  <a href="#" class="text-center d-flex flex-column justify-content-center">
                    <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                      <i class="fas fa-couch fa-xl fa-fw"></i>
                    </button>
                    <div class="text-dark">Interior items</div>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#" class="text-center d-flex flex-column justify-content-center">
                    <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                      <i class="fas fa-basketball-ball fa-xl fa-fw"></i>
                    </button>
                    <div class="text-dark">Sport and travel</div>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#" class="text-center d-flex flex-column justify-content-center">
                    <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                      <i class="fas fa-ring fa-xl fa-fw"></i>
                    </button>
                    <div class="text-dark">Jewellery</div>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#" class="text-center d-flex flex-column justify-content-center">
                    <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                      <i class="fas fa-clock fa-xl fa-fw"></i>
                    </button>
                    <div class="text-dark">Accessories</div>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="row">
                <div class="col-3">
                  <a href="#" class="text-center d-flex flex-column justify-content-center">
                    <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                      <i class="fas fa-car-side fa-xl fa-fw"></i>
                    </button>
                    <div class="text-dark">Automobiles</div>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#" class="text-center d-flex flex-column justify-content-center">
                    <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                      <i class="fas fa-home fa-xl fa-fw"></i>
                    </button>
                    <div class="text-dark">Home items</div>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#" class="text-center d-flex flex-column justify-content-center">
                    <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                      <i class="fas fa-guitar fa-xl fa-fw"></i>
                    </button>
                    <div class="text-dark">Musical items</div>
                  </a>
                </div>
                <div class="col-3">
                  <a href="#" class="text-center d-flex flex-column justify-content-center">
                    <button type="button" class="btn btn-outline-secondary mx-auto p-3 mb-2" data-mdb-ripple-color="dark">
                      <i class="fas fa-book fa-xl fa-fw"></i>
                    </button>
                    <div class="text-dark">Book, reading</div>
                  </a>
                </div>
              </div>
            </div>
              </div>
            </div>
          </nav>
        </div>
      </section>
      <!-- category -->
      
      <!-- Products -->
      <section>
        
        <div class="container my-5">
          <header class="mb-4">
            <h3>All products</h3>
          </header>
      
          <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card my-2 shadow-0">
                <a href="#" class="">
                  <img src="{{ isset($product) ? Storage::url($product->image) : '' }}" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1"/>
                </a>
                <div class="card-body p-4 pt-2"><p class="btn-holder">
                  <h5 class="card-title">{{ $product->price }}</h5>
                  <p class="card-text mb-0">{{ $product->name }}</p>
                  <p class="text-muted">
                    {{ $product->description }}
                  </p>
                  <p><a href="{{ url('product-description/' . $product->id) }}" style="font-decoration: underline; color: rgb(0, 0, 0);">More Description</a></p>
                  <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                  
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
       
      </section>
      <!-- Products -->
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

