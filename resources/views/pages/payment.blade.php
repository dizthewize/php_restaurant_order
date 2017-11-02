@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/stripe.css') }}">
@endsection

@section('content')

  <div class="row">
    <div class="col-md-6 col-sm-9 col-md-offset-3 col-sm-offset-2">
      <div class="absolute-center is-responsive">
      <div class="well well-lg payment-well">

      <form action={{route('payment.store')}} method="POST" id="payment-form">
        {{csrf_field()}}
        <div class="form-row">
          <label for="card-element">
            Credit or Debit card
          </label>
          <div id="card-element">
            <!-- a Stripe Element will be inserted here. -->
          </div>

          <!-- Used to display Element errors -->
          <div id="card-errors" role="alert"></div>
        </div>

        <button class="payment-btn" type="submit">Submit Payment</button>
        </form>

        </div>
        </div>
      </div>
    </div>

@endsection
