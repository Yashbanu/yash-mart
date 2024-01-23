<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    
    //Display Product
    public function display($id=null){
        return $id?Product::find($id):Product::all();
    }

    //Insert Product
    public function addProduct(Request $req){
        $validator=Validator::make($req->all(),[
        "name"=>"required | min:5 | max:20",
        "category"=>"required | min:5 | max:20",
        "price"=>"required |numeric | min:1 |max:1000000",
        "quantity"=>"required | numeric | min :1 "]);
    if($validator->fails()){
       return $validator->errors();
   }else{
       $product=new Product();
       $product->name=$req->name;
       $product->category=$req->category;
       $product->price=$req->price;
       $product->quantity=$req->quantity;
      $sucess= $product->save();
       if($sucess){
           return ["result"=>"inserted sucessfully"];
       }else{
           return ["result"=>"error"];
       }
   }

}

    //Update product
    public function updateProduct(Request $req){
        $product=Product::find($req->id);
        $product->name=$req->name;
        $product->category=$req->category;
        $product->price=$req->price;
        $product->quantity=$req->quantity;
        $sucess=$product->save();
        if($sucess){
            return ["result"=>"updated sucessfully"];
        }else{
            return ["result"=>"error"];
        }
        
    }

    //Search product
    public function searchProduct($id){
        return Product::where("id",$id)->get();
    }
    
    //Delete product
    public function deleteProduct($id){
        $product=Product::find($id);
        $sucess=$product->delete();
        if($sucess){
            return ["result"=>"deleted sucessfully"];
        }else{
            return ["result"=>"error"];
        }
    }
    
  
}
