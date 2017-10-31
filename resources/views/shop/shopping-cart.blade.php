@extends('layout.master')

@section('title')
  Shopping Cart
@endsection

@section('content')
  @if(Session::has('cart'))
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <ul class="list-group">
          @foreach($products as $product)
            <li class="list-group-item">
                <span class="badge">{{$product['qty']}}</span>
                <strong>{{$product['item']['title']}}</strong>
                <span class="label label-success">{{$product['price']}}</span>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Reduced by 1</a></li>
                        <li><a href="#">Reduced by all</a></li>
                    </ul>
                </div>
            </li>
          @endforeach
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <strong>Total:{{$totalPrice}}</strong>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
      <a href="{{route('checkout')}}" type="button" class="btn btn-success">Check out</a>
    </div>
  </div>
  @else
  <div class="row">
    <div class="col-sn-6 col-nd-6 col-nd-offset-3 col-sn-offset-3">
      <strong>No Items in the Cart! </strong>
    </div>
  </div>
  @endif
@endsection
