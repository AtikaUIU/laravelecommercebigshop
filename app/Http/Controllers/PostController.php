<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student; 

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Student::with('programs')->get();  
        return view('admin.posts.index', compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/posts/create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name'   => 'required | max:255',
            'section'   => 'required | max:255',
            'email'  =>  'required |email|unique:testform| max:255',
            'address'   => 'required | max:255',
            'phn_num'   => 'required | max:255',
        ]); 
        
        Student::create($request->all()); 
        return redirect()->back()->with('success', 'inserted successfully'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Student::find($id); 
        return view('admin.posts.show', compact('data')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Student::find($id); 
        return view('admin.posts.edit', compact('data')); 
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
        $request->validate([
            'name'   => 'required | max:255',
            'section'   => 'required | max:255',
            'email'  =>  'required |email|unique:testform| max:255',
            'address'   => 'required | max:255',
            'phn_num'   => 'required | max:255',
        ]); 
        
        $record = Student::find($id); 
        $record->update($request->all()); 
        return redirect()->back()->with('success', 'Update successfully'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('id',$id)->delete(); 
        return redirect()->back()->with('success', 'Successfully Deleted'); 
    }
}
