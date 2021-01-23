@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('messages.store') }}" method="POST">

        <!-- CSRF token -->
        @csrf

        <div class="form-group">
            <label for="message_body">Message</label>
            <input value="{{ @old('message_body') }}" name="message_body" type="text" class="form-control" id="message_body">
            @if ($errors->has('message_body'))
                <span class="text-danger">{{ $errors->first('message_body') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="from_id">FROM</label>
            <input value="{{ @old('from_id') }}" name="from_id" type="text" class="form-control" id="from_id">
            @if ($errors->has('from_id'))
                <span class="text-danger">{{ $errors->first('from_id') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="to_id">TO</label>
            <input value="{{ @old('to_id') }}" name="to_id" type="text" class="form-control" id="to_id">
            @if ($errors->has('to_id'))
                <span class="text-danger">{{ $errors->first('to_id') }}</span>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('messages.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection