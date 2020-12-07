

@extends('layouts.app')



@section('content')
<a href="{{ route('Sales.create') }}" class="btn btn-primary mt-5">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">price</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach ($sales as $sale)
    <tr>
           <td>{{$sale->id}}</td>
           <td>{{$sale->price}}</td>
           <td>
            <a class="btn btn-outline-primary" href="{{route('Sales.show',['Sale' => $sale->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{route('Sales.edit',['Sale' => $sale->id]) }}">Edit</a>

           </td>
        
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


