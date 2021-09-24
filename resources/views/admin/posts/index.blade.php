
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
    
    <h2>  <a href="{{ route('posts.create')}}">Create New Record</a></h2>
        <table>
            <tr>
                <td>id</td>
                <td>Name</td>
                <td>Section</td>
                <td>Email</td>
                <td>Program Name</td>

        @foreach($data as $row)
        
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->name}}</td>
                <td>{{$row->section}}</td>
                <td>{{$row->email}}</td>
                <td></td>
                <td>
                    <a href="{{route('posts.show',$row->id)}}">Show</a>
                    <a href="{{route('posts.edit',$row->id)}}">Edit</a>
                    <!-- <a href="{{route('posts.destroy',$row->id)}}">Delete</a> -->

                    <form action="{{route('posts.destroy',$row->id)}}" method="POST" onsubmit="return confirm('Are you sure)">
                    @csrf
                    @method('delete')
                    <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </table>

    </div>
    
 

 
@livewireScripts

</body>
</html>

@endsection

