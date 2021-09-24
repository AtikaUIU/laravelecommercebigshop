@extends('layouts.app')

@section('content')

<div class="container">


    
<h3>Edit Student Record</h3>

    <form action="{{ route('posts.update',$data->id)}}" method="POST">
    @csrf
    @method('PUT')
        <p>name</p>
        <input type="text" name="name" value="{{ $data->name}}">

        <p>section</p>
        <input type="text" name="section" id="" value="{{ $data->section}}">

        <p>email</p>
        <input type="text" name="email" id="" value="{{ $data->email}}">

        <p>address</p>
        <input type="text" name="address" id="" value="{{ $data->address}}">

        <p>Phone Number</p>
        <input type="text" name="phn_num" id="" value="{{ $data->phn_num}}">
<br>
<br>
        <button type="submit">Update</button>
        <a href="{{route('posts.index')}}">Back</a>
    </form>

</div>

@endsection