

@extends('layouts.app')



@section('content')
<div>
   <h3>Sale detail </h3>
   <ul class="list-unstyled">
       <li>Price: {{ $sale->price}}</li>
       
     </ul>


       <a href="{{ route('sales.index') }}" class="btn btn-outline-primary">Back</a>
       <a class="btn btn-outline-primary" href="{{route('sales.edit',['sale' => $sale->id]) }}">Edit</a>
       <form class="form-inline" action="{{ route('sales.destroy', ['sale' => $sale->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
           
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>



   </div>

@endsection


