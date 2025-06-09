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
}
