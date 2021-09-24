
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Show Record</title>
    @livewireStyles
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css" integrity="sha512-l7qZAq1JcXdHei6h2z8h8sMe3NbMrmowhOl+QkP3UhifPpCW2MC4M0i26Y8wYpbz1xD9t61MLT9L1N773dzlOA==" crossorigin="anonymous" />

</head>
<body>

    <div class="container">
    
        <h2>Show Student Record</h2>

        <p>
        {{$data->name}}
        {{$data->section}}
        {{$data->email}}
        </p>


        </table>

    </div>
    
    <div>
        <h4>Program</h4>
        @foreach($data->programs as $row)

        {{$row->prog_name}} <br>
        @endforeach
        
        </div>
 

 
@livewireScripts

</body>
</html>

@endsection

