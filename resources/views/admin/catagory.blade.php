<!DOCTYPE html>
<html lang="en">
    <style type="text/css">

        .div_center{
          text-align: center;
          padding: 40px;
        }
        .h1_font{
            font-size: 30px;
            padding-bottom: 40px;
        }
        .center{
            text-align: center
        }
        </style>
 
      
  @include('admin.head')
  

  

  @include('admin.body')
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
     @include('admin.nav')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="div_center">
                    @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
                        {{ session()->get('message') }}
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                    </div>
                    @endif
                    
                    @if (session()->has('error'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
                        {{ session()->get('error') }}
                        {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                    </div>
                    @endif
                    {{--  validation error message --}}
                    @if ($errors->any())
                    <div class="alert alert-danger" id="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
             
                <h2 class=h1_font> Add catagory</h2>
                <form action="{{url('/add_catagory')}}" method="post">
                    @csrf
                    <input type="text" style="color:black"name="catagory" placeholder="write catagory name">
                    <input type="submit"  class="btn btn-primary"name="submit" value="Add Catagory">
                </form>

            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Catagory name</th>
                    <th scope="col">Action</th> 
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr>
                        <th scope="row">{{$data->catagory_Name}}</th>
                        <td>
                            <div class="d-flex">
                                    
                                <a class="btn btn-danger btn-sm" href="{{ url('delete_catagory', $data->id) }}">Delete</a>
                            </div>
                        </td>
                        
                      </tr>

                @endforeach
                </tbody>
                    </table>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.js')