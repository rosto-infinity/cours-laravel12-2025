<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy("id","desc")->paginate(4);
        $totalProducts = $products->count();
       return view('pages.products-index',
       [
        'products'=> $products,
       'totalProducts'=> $totalProducts
       ]);
    }

    public function create()
    {
      return view('pages.products-create');  
    }
    public function store(Request $request)
    {
      $validation =$request->validate([
        'title' => 'required|max:255',
        'category' => 'required|max:255',
        'price' => 'required|numeric|min:0',
      ]);
      Product::create($validation);
      return redirect()->route('products.index')
      ->with('success', 'Product created successfully!'); 
    }

  public function edit($id): View
    {
      $product = Product::findOrFail($id);
      return view('pages.products-edit', [
        'product' => $product,
      ]);
    }

    public function update(Request $request, $id )
    {
      $validation =$request->validate([
        'title' => 'required|max:255',
        'category' => 'required|max:255',
        'price' => 'required|numeric|min:0',
      ]);
      $product = Product::findOrFail( $id );
      $product->title =  $validation ['title'];
      $product->category =  $validation ['category'];
      $product->price =  $validation ['price'];
      $product->save() ;

      return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }
    public function destroy($id)
    {
      $product = Product::findOrFail($id);
      $product->delete();
      return redirect()->route('products.index')->with('error', 'Product deleted successfully!');
    }
}
