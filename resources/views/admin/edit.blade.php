<!DOCTYPE html>
<html lang="en">
    <base href="/public">
  @include('admin.head')

  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="Admin/https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="Admin/https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.nav')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Update New Product</h2>
                
                
                        @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
                                {{ session()->get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        {{-- error message --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <!-- Multi Columns Form -->
                        <form action="{{url('/update_product',$product->id)}}" method="POST" class="row g-3" enctype="multipart/form-data">
                         
                          @method('put')
                         
                      
                            @csrf
                            <div class="col-md-12">
                                <label for="inputName5" class="form-label">Title</label>
                                <input type="text" style="Background-color:rgb(46, 10, 74)"name="Title" style="color:beige"class="form-control" id="inputName5" value="{{$product->Title}}"placeholder="ex: Mou">
                            </div>
                            <div class="col-md-6"style="color:black">
                                <label style="color:rgb(18, 18, 17)"for="inputEmail5" class="form-label">Description</label>
                                <input type="text"style="Background-color:rgb(46, 10, 74)" style="color:beige"name="Description" value="{{$product->Description}}" class="form-control" id="inputEmail5">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Price</label>
                                <input type="text" style="Background-color:rgb(46, 10, 74)" style="color:beige"name="Price" class="form-control" id="inputPassword5"value="{{$product->Price}}">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress5" class="form-label">Quantity</label>
                                <input type="number"style="Background-color:rgb(46, 10, 74)" style="color:beige"name="Quantity" class="form-control" id="inputAddres5s" value="{{$product->Quantity}}" placeholder="016*******">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Discount_Price</label>
                                <input type="text" style="Background-color:rgb(46, 10, 74)"name="Discount_Price" style="color:beige"class="form-control" id="inputAddress2"value="{{$product->Discount_Price}}" placeholder="Disease name">
                            </div>
                            <div class="col-12">
                                <label for="" class="form-label">catagory</label>
                                <select class="form-select" name="Catagory" aria-label="Default select example"style="Background-color:rgb(46, 10, 74)">
                                  <option value="{{$product->Catagory}}"selected="">{{$product->catagory}}</option>
                                  @foreach ($catagory as $catagory)
                                  
                                  <option selected>{{$catagory->catagory_Name}}</option>
            
                                  @endforeach
                                    
                                  
                                </select>
                            </div>
                            <div class="div_design">
                                <label>current Product image:</label>
                                <img  height="150" width="150"src="/Product/{{$product->Product_image}}">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">ProductImage</label>
                                <input type="file" name="Product_image" class="form-control" id="inputAddress2">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update Product</button>
                                {{-- <button type="reset" class="btn btn-secondary">Reset</button> --}}
                            </div>
                        </form><!-- End Multi Columns Form -->
                
                    </div>
                </div>
            </div>
                    </div>
                    <!-- main-panel ends -->
                  </div>
                  <!-- page-body-wrapper ends -->
                </div>
                <!-- container-scroller -->
                @include('admin.js')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.js')