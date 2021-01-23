

@extends('layouts.app')



@section('content')
<div>
   <h3>Vehicle type details</h3>
   <ul class="list-unstyled">
       <li>Name: {{ $vehicle_type->name}}</li>
       
     </ul>


       <a href="{{ route('vehicle_types.index') }}" class="btn btn-outline-primary">Back</a>
       <a class="btn btn-outline-primary" href="{{route('vehicle_types.edit',['vehicle_type' => $vehicle_type->id]) }}">Edit</a>
       <form class="form-inline" action="{{ route('vehicle_types.destroy', ['vehicle_type' => $vehicle_type->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>



   </div>

@endsection


