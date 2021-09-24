
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Laravel Livewire Example - ItSolutionStuff.com</title>
    @livewireStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css" integrity="sha512-l7qZAq1JcXdHei6h2z8h8sMe3NbMrmowhOl+QkP3UhifPpCW2MC4M0i26Y8wYpbz1xD9t61MLT9L1N773dzlOA==" crossorigin="anonymous" />

</head>
<body>

    <div class="container">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="{{ route('testsubmit')}}" method="POST"> 
    @csrf()
    
        <label for="name">First name:</label>
        <input type="text" name="name" id="name">
        <br> 
        @error('name')
            <div class="alert-danger">{{ $message}} </div>
        @enderror

        <label for="email">Email:</label>
        <input type="text" name="email" id=""> <br>
        @error('email')
            <div class="alert-danger">{{ $message}} </div>
        @enderror
        <button>Submit Data</button>
    
    </form>
    </div>
    
 

    <div class="container">
        <div class="card">
            <div class="card-header">
            Liveware Datatable
            </div>

        <div class="card-body">
            <livewire:user-datatables 
                searchable="name, email"
                exportable
            />  
        </div>
    </div>
</div>

@livewireScripts

</body>
</html>

@endsection

