<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $all_ = product::all();


        return view('products.index',['all'=>$all_]);

    }
    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=>'nullable',

        ]);

        $newproduct = product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(product $product){

        //dd($product);
        return view('products.edit',['product'=>$product]);

    }

    public function update(product $product,request $request){
        $data = $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=>'nullable',

        ]);

        $product->update($data);

        return redirect(route('product.index'))->with('success','created successfully');
    }

    public function delete(product $product){
        $product->delete();
        return redirect(route('product.index'))->with('success','Deleted successfully');

    }
}
