

@extends('layouts.app')



@section('content')
<div>
   <h3>Role detail </h3>
   <ul class="list-unstyled">
       <li>Name: {{ $role->name}}</li>
       
     </ul>


       <a href="{{ route('roles.index') }}" class="btn btn-outline-primary">Back</a>
       <a class="btn btn-outline-primary" href="{{route('roles.edit',['role' => $role->id]) }}">Edit</a>
       <form class="form-inline" action="{{ route('roles.destroy', ['role' => $role->id]) }}" method="POST">
            <!-- CSRF token -->
            @csrf
            @method('DELETE')
            
            <button type="submit" onclick="areYouSure(event)" class="btn btn-danger">Delete</button>
</form>



   </div>

@endsection


