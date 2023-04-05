<!DOCTYPE html>
<html>
    <base href="/public">
   @include('Home.head')
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('Home.header')
         <!-- end header section -->
         <!-- slider section -->


         <br>
         <br>
         <br>
         <br>
         <br> 
         <br>
         <br>
     
            <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto;width:50%;padding:30px;text-align:center">
                <div class="box">
                   <div class="option_container">
                      <div class="options">
                     
                      </div>
                   </div>
                   <div class="img-box">
                      <img style="width: 2000px; height:300px" src="/Product/{{ $product->Product_image}}" alt="no image found" srcset="">
                   </div>
                   <div class="detail-box">
                      <h5>
                        {{$product->Title}}
                      </h5>
                      <h5  style="color:green">
                       Discount_Price: {{$product->Discount_Price}}
                      </h5>
                      <h5 style="text-decoration: line-through; color:rgb(166, 32, 32)">
                        Old_Price:{{$product->Price}}
                      </h5>
                      <h5 style="color:green">
                    Product_Description : {{$product->Description}}
                      </h5>
                      <h5 style="color:green">
                        Product_Quantity : {{$product->Quantity}}
                        </h5>

                   </div>
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
             

   
      @include('Home.footer')
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