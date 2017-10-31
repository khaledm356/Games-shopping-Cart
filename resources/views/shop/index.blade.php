@extends('layout.master')
@section('title')
Laravel shopping cart
@endsection
@section('content')
  @foreach($products->Chunk(3) as $productChunk)
    <div class="row">
      @foreach($productChunk as $product)
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="{{$product->imagePath}}" alt="..." style="max-height:150px" class="img-responsive">
          <div class="caption">
            <h3>{{$product->title}}</h3>
            <p class="description">{{$product->description }}
            </p>
              <div class="clearfix">
                <div class="pull-left price">${{$product->price}}</div>
                  <p>  <a href="#" class="btn btn-success pull-right" role="button ">Add to cart</a></p>
              </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @endforeach
@endsection
