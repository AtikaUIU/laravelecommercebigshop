<?php

namespace App\Http\Controllers;
use App\testformModel; 

use Illuminate\Http\Request;
use Validator;
use DB; 

class testformController extends Controller
{
    public function store(Request $req){
        
        // echo "<pre>"; 
        // print_r($req->input()); 
        // echo "</pre>"; 
       $req->validate([
            'name'   => 'required | max:255',
            'email'  =>  'required |email|unique:testform| max:255',
        ]); 
    

        $datatestform = new testformModel; 

        $datatestform->name = $req->name; 
        $datatestform->email = $req->email; 

        $datatestform->save();
        return redirect()->route('testform');
    } 

    public function index(){
        $data = testformModel::with('program')->get();  
        return view('testform', compact('data')); 
    }
}