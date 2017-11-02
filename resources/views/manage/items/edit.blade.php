@extends('layouts.manage')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-offset-2">
        <h3 class='add-item'>Edit Item</h3>
      </div>
      <div class="col-md-offset-2 col-md-6 create-form">
        {!! Form::open(['action' => ['ItemsController@edit', $food->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

        <div class="form-group">
          {{Form::label('name', 'Name')}}
          {{Form::text('name', $food->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
        </div>


        {{-- <div class="form-group">
          {{Form::label('slug', 'Slug:')}}
          {{Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => '4', 'maxlength' => '255'])}}
        </div> --}}

        <div class="form-group">
          {{Form::label('description', 'Description')}}
          {{Form::textarea('description', $food->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>

        <div class="form-group">
          {{Form::label('price', 'Price')}}
          {{Form::number('price', $food->price, ['class' => 'form-control'])}}
        </div>

        <div class="form-group">
          {{Form::file('image')}}
        </div>

          {{Form::hidden('_method', 'PUT')}}
          {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
      </div>
    </div>
  </div>

@endsection
