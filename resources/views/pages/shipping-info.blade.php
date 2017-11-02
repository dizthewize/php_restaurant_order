@extends('layouts.app')

@section('content')
  <div id="shipping-info">
  <div class="row">
    <div class="medium-6 cell">
      <h3>Order Info</h3>

      {!! Form::open(['route' => 'order.store', 'method' => 'POST']) !!}

        <div class="form-group">
          {{Form::label('phone', 'Phone')}}
          {{Form::number('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone'])}}
        </div>

        {{Form::submit('Proceed to Payment', ['class' => 'btn btn-success'])}}
      {!! Form::close() !!}
    </div>
  </div>
  </div>

@endsection
