<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy("id","desc")->paginate(2);
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
}
