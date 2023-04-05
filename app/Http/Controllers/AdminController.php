<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;
use App\Models\Product;
class AdminController extends Controller
{
    public function view_catagory(){
        $data=catagory::all();
        return view('admin.catagory',compact('data'));
    }
    public function add_catagory(Request $request){
     $data=new catagory;
     $data->catagory_Name = $request->catagory;
     $data->save();
       return redirect()->back()->with('message','catagory added successfully');
    }
    public function delete_catagory($id){

        $data= catagory::findorFail($id);
        $data->delete();
        return redirect()->back()->with('message', 'catagory deleted successfully!');
     }

     public Function view_Product(){
        $catagory=catagory::all();
        return view('admin.AddProduct',compact('catagory'));

     }
     public function Add_Product(Request $request){
        //   return $request->all();
        $product=new product;
        $product->Title=$request->Title;
        $product->Description=$request->Description;
        $product->Price=$request->Price;
        $product->Quantity=$request->Quantity;
        $product->Discount_Price=$request->Discount_Price;
        $product->Catagory=$request->Catagory;
        // $product->Product_image=$request->Product_image;

        $Product_image=$request->Product_image;
        $imagename=time().'.'.$Product_image->getClientOriginalExtension();
        $request->Product_image->move('Product',$imagename);
        $product->Product_image=$imagename;
         
        $product->save();
        return redirect()->back()->with('message', 'Product Added successfully!');

     }

        
     public function show_Product(){
        $product=product::all();
        return view('admin.showProduct',compact('product'));
     }

     public function delete_product($id){

      $product= product::findorFail($id);
      $product->delete();
      return redirect()->back()->with('message', 'product deleted successfully!');
   }

  public function edit_product($id){
   $product=product::find($id);
   $catagory=catagory::all();

   return view('admin.edit',compact('product','catagory'));
  }
 public function update_product(Request $request,$id){

   $product= product::find($id);

   $product->Title=$request->Title;
   $product->Description=$request->Description;
   $product->Price=$request->Price;
   $product->Quantity=$request->Quantity;
   $product->Discount_Price=$request->Discount_Price;
   $product->Catagory=$request->Catagory;
   // $product->Product_image=$request->Product_image;

   $Product_image=$request->Product_image;
   if($Product_image){
      $imagename=time().'.'.$Product_image->getClientOriginalExtension();
   $request->Product_image->move('Product',$imagename);
   $product->Product_image=$imagename;
   }
  
    
   $product->save();
   return redirect()->back()->with('message', 'Product Updated successfully!');
  }

  public function view_order(){
   return view('admin.vieworder');
  }
  
}

