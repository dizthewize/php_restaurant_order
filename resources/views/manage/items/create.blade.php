@extends('layouts.manage')

@section('content')

  <div class="container">
    <div class="row">
      <div class="form-management">
        <div class="col-md-offset-2">
          <h3 class='add-item'>Add Item</h3>
        </div>
        <div class="col-md-offset-2 col-md-6 create-form">
          {!! Form::open(['action' => 'ItemsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

          <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
          </div>

            {{-- to add slug into form --}}
          {{-- <div class="form-group">
            {{Form::label('slug', 'Slug:')}}
            {{Form::text('slug', '', ['class' => 'form-control', 'required' => '', 'minlength' => '4', 'maxlength' => '255'])}}
          </div> --}}

          <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
          </div>

          <div class="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::number('price', '', ['class' => 'form-control'])}}
          </div>

          <div class="form-group">
            {{Form::file('image')}}
          </div>

            {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>

@endsection
