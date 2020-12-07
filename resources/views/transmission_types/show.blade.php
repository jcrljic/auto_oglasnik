

@extends('layouts.app')



@section('content')
<div>
   <h3>Transmission type details</h3>
   <ul class="list-unstyled">
       <li>Name: {{ $Transmission_type->name}}</li>
       
     </ul>


       <a href="{{ route('Transmission_types.index') }}" class="btn btn-outline-primary">Back</a>



   </div>

@endsection


