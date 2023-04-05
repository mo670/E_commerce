<!DOCTYPE html>
<html lang="en">
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
                        <p class="card-title text-center" >All Orders</p>
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
                        {{-- @dd($allPatients) --}}
                        <!-- Table with hoverable rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                   
                                    <th scope="col">Product_image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Discount_Price</th>
                                    <th scope="col">Catagory</th>
                                    <th scope="col">Action </th>

                                    
                                </tr>
                                {{-- @foreach ($order as $order)
                                    
                              
                                <tr>
                                    <td>
                                        <img style="width: 90px" src="/Product/{{ $product->Product_image}}" alt="no image found" srcset="">
                                    </td>
                                    
                                    <td>{{$product->Title}}</td>
                                    <td>{{$product->Description }}</td>
                                    <td>{{ $product->Price}}</td>
                                    <td>{{ $product->Quantity }}</td>
                                    <td>{{ $product->Discount_Price}}</td>
                                    <td>{{ $product->Catagory}}</td>  

                                    <td>
                                        <a class="btn btn-warning btn-sm" href="{{ url('delete_product',$product->id)}}">Delete</a> 
                                         <a class="btn btn-danger btn-sm" href="{{url('edit_product',$product->id)}}">Update</a> 
                                    </td>
                                </tr>
                            @endforeach
         --}}
                        </tbody>
                    </table>

            </div>
            </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.js')