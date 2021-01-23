@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('transmission_types.update', ['transmission_type' => $transmission_type -> id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

       
        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ $transmission_type->name }}" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('transmission_types.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection