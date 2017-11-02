@extends('layouts.manage')

@section('content')
  <div class="row">
    <div class="col-md-offset-3 col-sm-6 col-md-4 thumbnail-manager">
      <a href="{{route('items.index')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back</a>

      <div class="thumbnail">
        <img src="/img/{{$food->image}}" alt="food image">
        <div class="caption">
          <h3 class="item-name">{{$food->name}}</h3>
          <p>{{$food->description}}</p>
          <p>${{$food->price}}</p>
          <p>
            <a href="{{route('items.edit', $food->id)}}" class="btn btn-primary" role="button">Edit
            </a>
            {!!Form::open(['action' => ['ItemsController@destroy', $food->id], 'method' => 'Post'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
          </p>
        </div>
      </div>
    </div>
  </div>
@endsection
