

@extends('layouts.app')



@section('content')
<div>
   <h3>Role detail </h3>
   <ul class="list-unstyled">
       <li>Name: {{ $Role->name}}</li>
       
     </ul>


       <a href="{{ route('Roles.index') }}" class="btn btn-outline-primary">Back</a>



   </div>

@endsection


