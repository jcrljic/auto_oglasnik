@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('vehicle_types.update', ['vehicle_type' => $vehicle_type -> id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

    
        <div class="form-group">
            <label for="name">Type</label>
            <input value="{{ $vehicle_type->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('type'))
                <span class="text-danger">{{ $errors->first('type') }}</span>
            @endif
        </div>
        

        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('vehicle_types.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection