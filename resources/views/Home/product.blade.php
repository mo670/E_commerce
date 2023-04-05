<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>
    
       <div class="row">
         @foreach ($product as $products)
          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="{{url('/Product_details',$products->id)}}" class="option1">
                      Product Details
                      </a>
                      <a href="" class="option2">
                      Buy Now
                      </a>
                      <form action="{{url('Add_cart',$products->id)}}" method="post">
                        @csrf
                        <div class="row">
                         <div class="col-md-4">
                       <input type="number" value="1" name="Quantity" min="1">
                           <div class="col-md-4" >
                        <input type="submit" class="btn btn-warning" value="Add to card" option="number"name="quantity">
                           </div>
                        </div>
                        </div>
                        
                        
                        
                      </form>
                   </div>
                </div>
                <div class="img-box">
                  <img style="width:200px; height:3000px" src="/Product/{{ $products->Product_image}}" alt="no image found" srcset="">
                </div>
                <div class="detail-box">
                   <h5>
                     {{$products->Title}}
                   </h5>
                   <h5  style="color:green">
                     {{$products->Discount_Price}}
                   </h5>
                   <h6 style="text-decoration: line-through; color:rgb(166, 32, 32)">
                     {{ $products->Price}}
                   </h6>
                </div>
             </div>
          </div>
       @endforeach
       <span style="padding: 40">
       {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
       </span>
    </div>
 </section>