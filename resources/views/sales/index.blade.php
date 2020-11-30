

@extends('layouts.app')



@section('content')
<table class="table table-striped">
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
        
           </tr>
    @endforeach
  </tbody>
</table>

@endsection


