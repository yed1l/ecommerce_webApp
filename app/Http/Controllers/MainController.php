<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');

    }
    public function product($product = null){
        return view('products', ['product'=> $product]);
    }
    public function categories(){
        $categories = Category::get();
            return view('catergory',compact('category'));
    }
}
