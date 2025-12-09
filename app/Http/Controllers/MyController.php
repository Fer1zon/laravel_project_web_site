<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    public function index(){
        return view('index');
    }

    public function auth(){
        return view('auth');
    }

    public function basket(){
        return view('basket');
    }

    public function catalog(){
        $products = DB::table('products')->get();
        return view('catalog', compact('products'));
    }

    public function location(){
        return view('location');
    }

    public function orders(){
        return view('orders');
    }
    public function product($id){
        $product = DB::table('products')->where("id", "=", $id)->first();
        return view('product', compact('product'));
    }
    public function registration(){
        return view('auth.register');
    }
}


?>
