@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('users.update', ['user' => $user -> id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

  
        <div class="form-group">
            <label for="first_name">First name</label>
            <input value="{{ $user->first_name }}" name="first_name" type="text" class="form-control" id="first_name">
            @if ($errors->has('first_name'))
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="last_name">Last name</label>
            <input value="{{ $user->last_name }}" name="last_name" type="text" class="form-control" id="last_name">
            @if ($errors->has('last_name'))
                <span class="text-danger">{{ $errors->first('last_name') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ $user->email}}" name="email" type="text" class="form-control" id="email">
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="last_online">Last online</label>
            <input value="{{ $user->last_online }}" name="last_online" type="date" class="form-control" id="last_online">
            @if ($errors->has('last_online'))
                <span class="text-danger">{{ $errors->first('last_online') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="phone_number">Phone number</label>
            <input value="{{ $user->phone_number }}" name="phone_number" type="text" class="form-control" id="phone_number">
            @if ($errors->has('phone_number'))
                <span class="text-danger">{{ $errors->first('phone_number') }}</span>
            @endif
        </div>
        <div class="form-group">
            <label for="role_id">Role</label>
            {{ Form::select('role_id', $roles, $user->role_id, ['class' => 'form-control', 'id' => 'role'])}}
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('users.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection