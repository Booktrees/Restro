@extends('layouts.apps')
@section('were')
<div class="container">
<h1>Orders Data</h1>
  <br>
  <table class="table table-striped" style="background-color: white;">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Menu Name</th>
        <th scope="col">Address</th>
        <th scope="col">Phone NO.</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Delivery Time</th>
        <th scope="col">Total</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>

        <th scope="row">{{$cart->id}}</th>
        <th scope="row">{{$cart->name}}</th>
        <th scope="row">{{$cart->title}}</th>
        <th scope="row">{{$cart->address}}</th>
        <th scope="row">{{$cart->phone}}</th>
        <th scope="row">{{$cart->price}}</th>
        <th scope="row">{{$cart->quantity}}</th>
        <th scope="row">{{$cart->delivery_time}}</th>
        <th scope="row">{{$cart->price * $cart->quantity}}</th>
        <th scope="row" style="display: flex;">
          {{-- Bill Generation --}}
          <a href="{{$cart->poli()}}" class ="mr-2" >
            <button style ="height: 30px;">
              <i data-feather="airplay"></i>
            </button>
          </a>
          {{-- Edit Cart --}}
          <a href="{{ $cart->paths()}}" class ="ml-1">
            <button>
              <i data-feather="edit-3"></i>
            </button>
          </a>
          {{-- Delete --}}
          <form method="POST" action="{{action('CartController@destroy', $cart->id)}}">
            @csrf
            <button type = "submit" class ="btn btn-danger">
            <i data-feather="delete"></i>
          </form>
            
          </button>          
        </th>
      </tr>     
    </tbody>
  </table>
</div>
@endsection