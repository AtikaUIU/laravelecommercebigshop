<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
 function product_form_show(){ 
        return view('admin.category.addproduct');
    }

    function product_save(){ 
        return "Working";
    }

}
