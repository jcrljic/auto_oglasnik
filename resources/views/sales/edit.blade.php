@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">

    <form action="{{ route('sales.update', ['sale' => $sale -> id]) }}" method="POST">

        <!-- CSRF token -->
        @csrf
        @method('PUT')

       
        <div class="form-group">
            <label for="price">Price</label>
            <input value="{{ $sale->price }}" name="price" type="number" class="form-control" id="price">
            @if ($errors->has('price'))
                <span class="text-danger">{{ $errors->first('price') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="buyer_id">Buyer_id</label>
            <input value="{{ $sale->buyer_id }}" name="buyer_id" type="number" class="form-control" id="buyer_id">
            @if ($errors->has('buyer_id'))
                <span class="text-danger">{{ $errors->first('buyer_id') }}</span>
            @endif
        </div>
        
        <div class="form-group">
            <label for="seller_id">Seller_id</label>
            <input value="{{ $sale->seller_id}}" name="seller_id" type="number" class="form-control" id="seller_id">
            @if ($errors->has('seller_id'))
                <span class="text-danger">{{ $errors->first('seller_id') }}</span>
            @endif
        </div>

        <button type="submit" class="btn btn-primary float-right">Save</button>
        <a href="{{ route('sales.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>
@endsection