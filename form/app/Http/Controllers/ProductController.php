<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{


    //AddProduct
   public function AddProduct(Request $req){
        $details=new Product();
        $details->name= $req->name;
        $details->category= $req->category;
        $details->price= $req->price;
        $details->quantity= $req->quantity;
        $req->validate([
            'name' => 'required|string|max:255',
            'category' =>'required ',
            'price' => 'required|numeric|min:1',
            'quantity'=>'required|numeric|min:1'

        ]);
        $details->save();
        return redirect("display");
     }


     //DeleteProduct
    public function DeleteProduct(Request $req){
        $data=Product::find($req->id);
        $data->delete();
        return redirect("display");
     } 


     //UpdateProduct
    public function UpdateProduct(Request $req){
        $data=Product::find($req->id);
        return view("update_product",["data"=>$data]);
     }




     //SaveUpdate
    public function SaveUpdate(Request $req){
        $data=Product::find($req->id);
        $data->name=$req->name;
        $data->category=$req->category;
        $data->price=$req->price;
        $data->quantity=$req->quantity;
        $data->save();
        return redirect("display");
     }



     //Dispaly
    public  function Display(Request $req){
        $data=Product::all();
        return view("display_product",["details"=>$data]);
     }
    
}
