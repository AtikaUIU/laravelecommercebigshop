<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use App\Order;
use PDF;

class OrderController extends Controller
{
    public function allOrder(){
        $order = Order::all(); 

        //dd($order); 

        return view('admin.allorder', compact('order')); 
    }

    public function OrderDetails($id){
        
        //dd($id); 

        $order = Order::where('order_row_id', $id)->first(); 
        //dd($order);
        //$productinfo = json_decode($order); 

        //dd($productinfo); 
        //$productdetails = $productinfo->order_details;
        //dd($productdetails);
        return view('admin.orderdetails', compact('order')); 
    }

    public function orderApprove($id){

       //$order = Order::all(); 
        //dd($id);
        order::where('order_row_id', $id)->update(['order_status'=>1]);

        //Mail body for apperove
        $details = [
            'title' => 'User Order Approve Status',
            'body' => 'Dear User Your Order has been approved'
        ];
       
        \Mail::to('asaaatika@gmail.com')->send(new \App\Mail\UserApproveNotification($details));

        Alert::toast('Approve Successfully!', 'success');
        return Redirect::to('admin/allorder');

    }
    public function orderReject($id){

       //$order = Order::all(); 
        //dd($id);
        order::where('order_row_id', $id)->update(['order_status'=>2]);

        $details = [
            'title' => 'User Order Reject Status',
            'body' => 'Dear User Your Order has been rejected'
        ];
       
        \Mail::to('asaaatika@gmail.com')->send(new \App\Mail\UserRejectNotification($details));

        Alert::toast('Rejected!', 'success');
        return Redirect::to('admin/allorder');

    }
     public function downloadOrderDetails($id)
     {
          //$order = Order::all();
          $order = Order::where('order_row_id', $id)->first(); 
          //dd($order);
          $pdf = PDF::loadView('admin.order_details_pdf', compact('order'));
          return $pdf->download('all_oderdetails.pdf');
     }

}
