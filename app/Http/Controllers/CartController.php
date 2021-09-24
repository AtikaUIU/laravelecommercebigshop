<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Models\Common;
use App\Models\TempOrder;
use App\Models\Product;
use App\Order;

class CartController extends Controller
{
    public function updateCartAjax(Request $request){
    	
    	if ($request->isMethod('post')) {
			//dd($request); 
    		$product_id = $request->product_id;
    		$quantity = $request->quantity;
			
			//echo $product_id . '--' . $quantity; exit(); 

    		if (! session()->has('tracking_number')) {
            	session()->put('tracking_number', Session::getId());
	        }
	        $tracking_number = session()->get('tracking_number');
	        $product_info = Product::where('product_row_id', $product_id)->first();

	        //check if the order is already exists
	        $order_exists= TempOrder::where('product_row_id',$product_info->product_row_id)->where('tracking_number',$tracking_number)->first();

	        if($product_info->product_offer_price != ''){
	        	$product_price = $product_info->product_offer_price;
	        } else {
	        	$product_price = $product_info->product_base_price;
	        }	

	        if($order_exists){
				DB::table('temp_orders')->where('temp_order_row_id', $order_exists->temp_order_row_id)->update([
				'product_qty'=> $quantity,
				'product_total_price'=> ($order_exists->product_price * $quantity)
				]);
	       	} else {
		        DB::table('temp_orders')->insert([
		        'product_row_id'=> $product_info->product_row_id, 
		        'tracking_number'=> $tracking_number,
		        'product_price'=> $product_price,
		        'product_qty'=> $quantity,
		        'product_total_price'=> $product_price*$quantity,  
		        'created_at'=> date('Y-m-d H:i:s'),        
		        ]);  
	       }
    	}
    }// update cart ajax ends

    public function removeFromCartAjax(Request $request) {
        if (! session()->has('tracking_number')) {
            session()->put('tracking_number', Session::getId());
        }
        $product_id = $request->product_id;
        DB::table('temp_orders')->where('tracking_number', session()->get('tracking_number'))->where('product_row_id',$product_id)->delete();
    }

    public function checkoutPage(){
    	if (! session()->has('tracking_number')) {
            session()->put('tracking_number', Session::getId());
        }

        $common_model = new Common();  
        $filter_category = $common_model->filter_category();

        $tracking_number = session()->get('tracking_number');
		$cartdata = DB::table('temp_orders As To')
       ->leftjoin('products As p', 'To.product_row_id', '=', 'p.product_row_id')
       ->where('To.tracking_number', $tracking_number)
       ->select('p.*', 'To.*')
       ->get();
       //dd($cartdata);
    	return view('checkout_details', compact('cartdata', 'filter_category'));
    }

	public function submitOrder(Request $request){
		//dd($request); 

		$order = new Order();
	//order detals
		if (! session()->has('tracking_number')) {
            session()->put('tracking_number', Session::getId());
        }

        $common_model = new Common();  
        $filter_category = $common_model->filter_category();

        $tracking_number = session()->get('tracking_number');
		$cartdata = DB::table('temp_orders As To')
       ->leftjoin('products As p', 'To.product_row_id', '=', 'p.product_row_id')
       ->where('To.tracking_number', $tracking_number)
       ->select('p.*', 'To.*')
       ->get();
	   $json = json_encode($cartdata);
	   //dd($cartdata);
       //dd($json);
	   
	   $order->order_details = $json;


	   
	   //customer information insert
	   
	   
	   
	   $customer['name'] =  $request->first_name;
	   $customer['last_name'] =  $request->last_name; 
	   $customer['address'] =  $request->address;
	   $customer['city'] =  $request->city;
	   //Product price calculation with shipping 
	   $customer['customer_area'] = $request->customer_area;
	   $product_total_price = $cartdata->sum('product_total_price'); 
	   if($customer['customer_area'] == 'dhaka'){
		   $product_total_price = $product_total_price + 25;
	   }else{
		   $product_total_price = $product_total_price + 60; 
	   }

	   $customer['zip_code'] = $request->zip_code;
	   $customer['phone_number'] = $request->phone_number;
	   $customer['email_address'] = $request->email_address;
	   $customer['payment_type'] = $request->payment_type;

	   $customer_info = json_encode($customer); 

		//order information insert
		$order->total_price = $product_total_price; 
		//$order->user_id = '';
		
		//$order->order_status = '';
		$order->shiping_address = $customer_info;
		
		$payment_type = $request->payment_type;

		if($payment_type == 1){
			$payment_details = "Cash on delivery";
		}else if ($payment_type == 3){
			$bkash['payment_method'] = "bKash"; 
			$bkash['txn_number'] = $request->txn_number;
	   		$payment_details = json_encode($bkash);
		}else if($payment_type == 4){
			$nagad['payment_method'] = "Nagad"; 
			$nagad['txn_number'] = $request->txn_number;
	   		$payment_details = json_encode($nagad);
		}else{
			if($payment_type == 2){
				$card_type = "Bank"; 
			}else if($payment_type == 5){
				$card_type = "Visa";
			}else if($payment_type == 6){
				$card_type = "Master Card";
			}else if($payment_type == 7){
				$card_type = "American Express";
			}else if($payment_type == 8){
				$card_type = "Discover";
			}
			$card['payment_method'] = $card_type; 
			$card['card_number'] = $request->car_number;
			$card['cvv'] = $request->car_code;
	   		$payment_details = json_encode($card);
		}
		//dd($payment_details); 

		$order->payment_details = $payment_details;

		$results = $order->save(); 

		// check data deleted or not
        if ($results == true) {
            $success = true;
            $message = "Order submitted for processing";
        } else {
            $success = true;
            $message = "Order not submitted";
        }

        //  Return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);

    	//return redirect('thankyou', compact('cartdata', 'filter_category'));

	}

	public function thankyou(){
		$common_model = new Common();  
        $filter_category = $common_model->filter_category();
		return view('thankyou', compact('filter_category')); 
	}

}

