<!DOCTYPE html>
<html>
   @include('Home.head')
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('Home.header')





        
<!DOCTYPE html>
<html lang="en">


<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content- 
                 center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-6 d-flex flex-column align-items-center justify- 
                         content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="#" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('backend/assets/img/logo.png') }}" alt="">
                                    <span class="d-none d-lg-block" style="color:red;font-size:40px ">Moutusi Online Shop</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">
                                    
                                    <div class="pt-4 pb-2">
                                        <p class="text-center display-6 text-decoration- 
                                         underline" style="color: brown">Your Information</p>
                                         
                                        <h5 class="card-title text-center pt-0 pb-0 fs-4">Cofirm your Information</h5>
                                    </div>
                                    @if (session()->has('message'))
                                        <div class="alert alert-success alert-dismissible fade show" 
                                         role="alert"
                                            id="alert">
                                            {{ session()->get('message') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
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
                           

                                    <form action="{{url('update_info')}}" method="POST"
                                       
                                      enctype="multipart/form-data"
                                        class="row g-3 needs-validation" novalidate>
                                        @method('put')
                                        @csrf
                                        <div class="col-md-12">
                                            <label for="yourUsername" class="form-label">Name</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="name" class="form-control"value="{{$user->name}}" required>
                                                <div class="invalid-feedback">Please enter your email.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="yourUsername" class="form-label">Email</label>
                                            <div class="input-group has-validation">
                                                <input type="Email" name="email" class="form-control" value="{{$user->email}}" required>
                                                <div class="invalid-feedback">Please enter your name.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="yourUsername" class="form-label">Address</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="address" class="form-control" value="{{$user->Address}}" required>
                                                <div class="invalid-feedback">Please enter your age.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Mobile</label>
                                            <div class="input-group has-validation">
                                                <input type="number" name="phone" class="form-control" value="{{$user->phone}}" required>
                                                <div class="invalid-feedback">Please enter your mobile.</div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-12">
                                            <label for="yourUsername" class="form-label">Disease</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="d_disease" class="form-control"  required>
                                                <div class="invalid-feedback">Please enter your disease.</div>
                                            </div>
                                        </div> --}}
                                       
                                        


                                        {{-- <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="rememberMe"
                                                     id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div> --}}
                                       
                                    </form>
                                   
                                </div>
                                <div style="text-align: center">
                                    <a href="{{url('show_cart')}}" class="btn btn-danger" style=background-color:red       type="submit">Previous</a>
                                    <a href="{{url('buy_option')}}" class="btn btn-danger" style=background-color:red       type="submit">Next</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
           
        </div>
      
    </main>
   
</body>
</html>
