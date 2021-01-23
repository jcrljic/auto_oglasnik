@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('users.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

  
        <div class="form-group">
            <label for="first_name">First name</label>
            <input value="{{ @old('first_name') }}" name="first_name" type="text" class="form-control" id="first_name">
            @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="last_name">Last name</label>
            <input value="{{ @old('last_name') }}" name="last_name" type="text" class="form-control" id="last_name">
            @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ @old('email') }}" name="email" type="text" class="form-control" id="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="last_online">Last online</label>
            <input value="{{ @old('last_online') }}" name="last_online" type="date" class="form-control" id="last_online">
            @if ($errors->has('last_online'))
                <span class="text-danger">{{ $errors->first('last_online') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="phone_number">Phone number</label>
            <input value="{{ @old('phone_number') }}" name="phone_number" type="text" class="form-control" id="phone_number">
            @if ($errors->has('phone_number'))
                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password">
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="role_id">Role</label>
            <input value="{{ @old('role_id') }}" name="role_id" type="number" class="form-control" id="role_id">
            @if ($errors->has('role_id'))
                <span class="text-danger">{{ $errors->first('role_id') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('users.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection