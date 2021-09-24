<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product; 
use App\Models\Category; 
use App\Models\Common; 
use DB; 

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $common_model = new Common();  
        $filter_category = $common_model->filter_category();
        $categories = Category::where('category_row_id', $id)->pluck('category_row_id');
        //dd($categories);
        $products = Product::whereIn('category_row_id', $categories)->get()->toArray();
        //dd($products);
        return view('products.all', compact('filter_category', 'products'));
    }

    public function details($id)
    {
        $common_model = new Common(); 


        $filter_category = $common_model->filter_category();
        $product_details = Product::where('product_row_id', $id)->first();
        //dd($product_details);
        $original_image_path = asset('/uploads/products/').'/'.$product_details->product_row_id.'/original/'.$product_details->product_image;
        $thumb_image_path = asset('/uploads/products/').'/'.$product_details->product_row_id.'/thumbnail/'.$product_details->product_image;
        return view('products.details', compact('filter_category', 'product_details', 'original_image_path', 'thumb_image_path'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
