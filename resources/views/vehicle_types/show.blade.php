

@extends('layouts.app')



@section('content')
<div>
   <h3>Vehicle type details</h3>
   <ul class="list-unstyled">
       <li>Name: {{ $Vehicle_type->name}}</li>
       
     </ul>


       <a href="{{ route('Vehicle_types.index') }}" class="btn btn-outline-primary">Back</a>



   </div>

@endsection


