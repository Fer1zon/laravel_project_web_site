<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function admin_orders(){
        return view('admin.orders');
    }

    public function add_category(){
        return view('admin.add_category');

    }

    public function add_product(){
        return view('admin.add_product');
    }

    public function edit_product(){
        return view('admin.edit_product');
    }

    public function categoryes(){
        return view('admin.categoryes');
    }


}


?>
