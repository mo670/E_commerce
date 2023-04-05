<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Stripe;
class HomeController extends Controller
{
    public function  Index(){
        $product = product::paginate(3);
        return view('Home.userpage',compact('product'));
    }



    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype == '1'){
            return view('admin.home');
        }
       
        else{

            $product = product::paginate(3);
        return view('Home.userpage',compact('product'));
         
        }
    }
    public function Product_details($id){
        $product=product::find($id);
        return view('Home.Product_details',compact('product'));
    }

    public function Add_cart(Request $request,$id)

    {
        

        if(Auth::id()){
           $user=Auth::user();
           $product=product::find($id);
        
           $cart=new cart;
           $cart->name=$user->name;
           $cart->email=$user->email;
           $cart->phone=$user->phone;
           $cart->Address=$user->Address;
           $cart->Title=$product->Title;
           if ($product->Discount_Price!=null) {
            $cart->price=$product->Discount_Price ;
           }
           else{
            $cart->price=$product->Price;
            // * $request->Quantity;
           
           }

           $cart->Quantity=$request->Quantity;
           $cart->Image=$product->Product_image;
           $cart->Product_id=$product->id;
           $cart->User_id=$user->id;
           $cart->save();
           return redirect()->back();
         


        }
        else{
            return redirect('login');
        }
    }

    public function show_cart(){

        if(Auth::id()){
            $id=Auth::user()->id;
            $cart=cart::where('user_id','=',$id)->get();
            return view('Home.show_cart',compact('cart'));

    
        }
    
        else{
            return redirect('login');
        }
       
    }
    public function remove_cart($id){
        $cart= cart::findorFail($id);
        $cart->delete();
        return redirect()->back();
    }
    public function buy_now()
    {
        if(Auth::id()){
            $user=Auth::user();
          
           
        return view('Home.buy_now',compact('user'));
    }
    else{
        return redirect('Home.show_cart');
    }
}
public function update_info(Request $request,){
         
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->Address=$request->Address;


        $newData = $request->all();
        $data = user::where('user_id',$request->user_user_id)->first();
        $data->fill($newData)->save();
        return redirect()->back->with('message','Profile updated successfully');
        
     
    
   
}
public function buy_option(){
    return view('Home.buy_option');
}

public function cash_order(){
    $user=Auth::user();
    $userid= $user->id;
    $cart=cart::where('user_id','=',$userid)->get();
     foreach( $cart as $cart){
        $order= new order;
        $order->name=$cart->name;
        $order->email=$cart->email;
        $order->phone=$cart->phone;
        $order->Address=$cart->Address;
        $order->user_id=$cart->User_id;
        $order->Title=$cart->Title;
        $order->Price=$cart->Price;
        $order->Quantity=$cart->Quantity;
        $order->Image=$cart->Image;
        $order->product_id=$cart->Product_id;
        $order->payment_status='cash on delivery';
        $order->delivery_status='Processing';
        $order->save();

          $cart_id = $cart->id;
          $cart=cart::find($cart_id);
          $cart->delete();


     }
      return redirect()->back();
    
}
 public function stripe(){
    return view('Home.stripe');


 }

 public function stripePost(Request $request)
 {
     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
 
     Stripe\Charge::create ([
             "amount" => 100* 100,
             "currency" => "usd",
             "source" => $request->stripeToken,
             "description" => "thanks for payment." 
     ]);
      $user=Auth::user();
    $userid= $user->id;
    $cart=cart::where('user_id','=',$userid)->get();
     foreach( $cart as $cart){
        $order= new order;
        $order->name=$cart->name;
        $order->email=$cart->email;
        $order->phone=$cart->phone;
        $order->Address=$cart->Address;
        $order->user_id=$cart->User_id;
        $order->Title=$cart->Title;
        $order->Price=$cart->Price;
        $order->Quantity=$cart->Quantity;
        $order->Image=$cart->Image;
        $order->product_id=$cart->Product_id;
        $order->payment_status='paid';
        $order->delivery_status='Processing';
        $order->save();

          $cart_id = $cart->id;
          $cart=cart::find($cart_id);
          $cart->delete();
   
     Session::flash('success', 'Payment successful!');
           
     return back();
 }
}
}

