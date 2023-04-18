<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        return view('product.product', compact('products'));
    }

    public function detail($id)
    {
        $product = Product::findOrFail($id);
        return view('product.detailProduct', compact('product'));
    }

    public function newProduct()
    {
        return view('product.newProduct');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'stock' => 'required|int',
            'precio' => 'required|numeric',
        ]);

        $data = $request->all();
        $product = new Product();
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->stock = $data['stock'];
        $product->precio = $data['precio'];
        $product->save();
        return redirect('product');
    }
    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        return view('product.editProduct', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'stock' => 'required|int',
            'precio' => 'required|numeric',
        ]);
        //Actualizar datos
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->stock = $request->input('stock');
        $product->precio = $request->input('precio');
        $product->save();
        return redirect('product');
    }

    public function delete($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();
        return redirect('product');
    }
}
