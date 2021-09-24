

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
      <div class="card-header">
        Liveware Datatable
      </div>
        <livewire:students/> 
      <div class="card-body">
        <livewire:user-datatables 
            searchable="name, email"
            exportable
         />
      </div>
    </div>
</div>

@endsection