
@extends('layouts.app')

@section('content')

    <div class="container">
    

    

    <h3>Add New Student</h3>

        <form action="{{ route('posts.store')}}" method="POST">
        @csrf

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <p>name</p>
            <input type="text" name="name">

            <p>section</p>
            <input type="text" name="section" id="">

            <p>email</p>
            <input type="text" name="email" id="">

            <p>address</p>
            <input type="text" name="address" id="">

            <p>Phone Number</p>
            <input type="text" name="phn_num" id="">

            <button type="submit">Submit</button>
        </form>

    </div>
@endsection