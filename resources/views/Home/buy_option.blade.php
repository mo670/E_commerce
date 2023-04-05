<!DOCTYPE html>
<html>
   @include('Home.head')
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('Home.header')
         <!-- end header section -->
         <!-- slider section -->


         <div class="container py-5">
            {{-- @dd($authID) --}}
                <div class="col-md-10 p-0" style="margin: auto">
                   
                    <form action="#" style="background:#914753;">
                        
                       
                        <div class="form-row m-0" style="background:#914753;">
                          <div class="form-group col-md-6">
                            
                            
                          </div>
                          <div class="form-group col-md-6">
                            
                            </div>
                            <div class="form-group col-md-6">
                            
                            </div>
        
                            <div class="form-group col-md-6">
                                
                            </div>
<div class="form-group col-md-10">
 <h1 style="text-align: center;font-size:30px"> Payment Type </h1>

    {{-- <label for="" style="font-size:20px">Payment Type:</label>
    <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline1" name="paymentGetway" value="cash"  required class="custom-control-input">
        <label class="custom-control-label"  href="{{url('cash_order')}}" style="font-size:20px" for="customRadioInline1">Cash On Delivery</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" name="paymentGetway" value="bkash" required class="custom-control-input">
        <label class="custom-control-label"  style="font-size:20px" for="customRadioInline2">Bkash</label>
      </div> --}}
</div>

</div>
<div class="alert alert-info" style="background-color: #c8adb4">
 <p>Inside Dhaka cash on delivery 60 tk<strong></strong></p>
<p>outside Dhaka cash on delivery 120tk</p>


<img src="{{ asset('front_ui/bkash/bkash-payment-system.png') }}" class="img-fluid" alt="" srcset="">
</div> 

 <div class="text-center">
 {{-- <a href="{{url('buy_now')}}" class="btn btn-danger" style="background-color:blanchedalmond;text-align:center; color:black" type="submit">Previous</a> --}}
<a href="{{url('cash_order')}}" style="background-color: rgb(154, 13, 18);color:black" class="btn btn-danger m-4">Cash On Delivery</a>
<a href="{{url('stripe')}}" style="background-color: rgb(154, 13, 18);color:black" class="btn btn-danger m-4">Payment with card </a>



</div> 


</form>


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
<div class="cpy_">
    <p class="mx-auto">© 2021 All Rights Reserved By <a href="home/https://html.design/">Moutusi Islam</a><br>
    
       Distributed By <a href="home/https://themewagon.com/" target="_blank">Moutusi</a>
    
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