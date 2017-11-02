@extends('layouts.app')

@section('content')
  <div class="row">
    <div class=" col-md-offset-3 col-sm-offset-3 col-sm-6 col-md-6">
        <div class="show-thumbnail">
        <a class="go-back" href="{{url('/')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back</a>

        <div class="thumbnail">
          <img src="/img/{{$foods->image}}">
          <div class="caption">
            <h3>{{$foods->name}}</h3>
            <p>{{$foods->description}}</p>
            <p>${{$foods->price}}</p>
              <a href="{{route('cart.edit', $food->id)}}" class="btn btn-success btn-md">Add to Order</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="random-thumbnails">
    <h3>Customers also viewed these items</h3>
    <div class="row">
        @foreach ($randomFood as $food)
          <div class="col-sm-6 col-md-3">
              <div class="random-thumbnails">
              <div class="thumbnail">
                <img src="/img/{{$food->image}}">
                <div class="caption">
                  <h4>{{$food->name}}</h4>
                  <p>{{$food->description}}</p>
                  <p>${{$food->price}}</p>
                    <a href="{{ route('foods.show', $food->id) }}" class="btn btn-primary btn-sm">View Item</a>
                    <a href="{{route('cart.edit', $food->id)}}" class="btn btn-success btn-md">Add to Order</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
    </div>
  </div>
@endsection
