<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data = Product::all();

        return view('product', compact('data'));
    }

    public function show($id){
        $productID = $id;

        return view('showProduct', compact('productID'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $data = request()->validate([
            'name' => 'required|string|min:5|max:25',
            'desc' => 'required|string|max:254',
            'price' =>'required|numeric',
            'available' => 'required|boolean',
        ]);

        Product::create($data);

        return redirect('/product')->with('success','Product successfully created');
    }

    public function edit($id){
        $product = Product::findOrFail($id);

        return view('edit', compact('product'));
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'name' => 'required|string|min:5|max:25',
            'desc' => 'required|string|max:254',
            'price' =>'required|numeric',
            'available' => 'required|boolean',
        ]);

        Product::whereId($id)->update($data);

        return redirect('/product')->with('success', 'Product successfully updated');
    }

    public function destroy($id){
        
    }
}
