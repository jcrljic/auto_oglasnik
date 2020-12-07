

@extends('layouts.app')



@section('content')
<div>
   <h3>Sale detail </h3>
   <ul class="list-unstyled">
       <li>Price: {{ $Sale->price}}</li>
       
     </ul>


       <a href="{{ route('Sales.index') }}" class="btn btn-outline-primary">Back</a>



   </div>

@endsection


