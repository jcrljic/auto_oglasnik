

@extends('layouts.app')



@section('content')
<a href="{{ route('sales.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">price</th>
      <th scope="col">buyer_id</th>
      <th scope="col">seller_id</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($sales as $sale)
    <tr>
           <td>{{$sale->id}}</td>
           <td>{{$sale->price}}</td>
           <td>{{$sale->buyer_id}}</td>
           <td>{{$sale->seller_id}}</td>
           <td>
            <a class="btn btn-outline-primary" href="{{route('sales.show',['sale' => $sale->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('sales.edit',['sale' => $sale->id]) }}">Edit</a>

           </td>
        
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


