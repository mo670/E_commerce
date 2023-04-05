<!DOCTYPE html>
<html>
   @include('Home.head')
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('Home.header')
         <!-- end header section -->

         <div class="col-12">
           
        </div>
        <div class="container py-5">
            <table class="table">
                <thead>
                    <tr style="background-color:rgb(188, 139, 139)">
                        <th scope="col">Product image</th>
                        <th scope="col">product name</th>
                        <th scope="col">Price</th>
                        {{-- <th scope="col">Product Quantity</th> --}}
                        <th scope="col">cart option</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                {{-- @dd($myOrders) --}}
           <?php $totalprice=0; ?>  
               @foreach($cart as $cart)

                <tbody>
                   
                    <tr>
                        {{-- <th scope="row"></th> --}}
                        
                            <td>
                                <img style="width: 90px" src="/Product/{{ $cart->Image}}" alt="no image found" srcset="">
                            </td>
                        
                        <td>{{$cart->Title}}</td>
                        <td>{{$cart->Price}}</td>

                        {{-- <td>{{$cart->Quantity}}</td> --}}
                       
                        
                  
                      
                  
                     <td>
                     <div>
                    <input style= "width:60px"type="number" value="{{$cart->Quantity}}" name="Quantity" min="1">
                     </div>
                    </td>
                    <td><a class="btn btn-warning btn-sm" href="{{ url('remove_cart',$cart->id)}}">Remove from cart</a></td>

                        
                    </tr>
                    <?php $totalprice= $totalprice+ $cart->Price * $cart->Quantity?>
                    @endforeach
            </tbody>
        </table>
        <div>
            <br>
            <br>
            
            <h1 style="text-align:center;color:rgb(3, 3, 3);font-size:30px ;background-color:rgb(188, 139, 139)">Total Price:{{$totalprice}}</h1>
            
        </div>
        {{-- <td><a class="btn btn-warning btn-sm" style="text-align: center;padding:40px" href="{{ url('remove_cart',$cart->id)}}">Remove from cart</a></td> --}}
    
        <div  style="text-align: center;padding:40px;font-size:60px">
            <a  href="{{url('/')}}" class="btn btn-danger">Previous</a>
            <a  href="{{url('buy_now')}}" class="btn btn-danger">Buy Now</a>
               </div>
        </div>

        <br>
        <br> 
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>    
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>









      {{-- @include('Home.footer') --}}
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="home/https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="home/https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>