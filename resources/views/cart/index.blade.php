@extends('layouts.app')

@section('content')
  <a class="go-back" href="{{url('/')}}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back</a>

  <h3 class="order-title">Order Items</h3>

  <ol class="cart-items">
    @foreach ($cartItems as $cartItem)
      <li>{{$cartItem->name}}</li>
    @endforeach
  </ol>

  <table class="table table-hover">

    <thead>
      <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Actions</th>
      </tr>
    </thead>

    <tbody>
      @foreach ($cartItems as $cartItem)
        <tr>
          <td>{{$cartItem->name}}</td>
          <td>{{$cartItem->price}}</td>
          <td id="qty">
            {!! Form::open(['route' => ['cart.update', $cartItem->rowId], 'method' => 'post']) !!}
              <input name="qty" type="text" value="{{$cartItem->qty}}">
              <input type="submit" class="btn btn-defaut btn-sm" value="ok">
              {{Form::hidden('_method', 'PUT')}}
            {!! Form::close() !!}
          </td>
          <td>
            {!!Form::open(['route' => ['cart.destroy', $cartItem->rowId], 'method' => 'Post'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
          </td>
        </tr>
      @endforeach

      <tr>

        <td></td>
        <td>
          Tax: ${{Cart::tax()}} <br>
          Sub Total: ${{Cart::subtotal()}} <br>
          Grand Total: ${{Cart::total()}}
        </td>
        <td>Items: {{Cart::count()}}</td>
        <td></td>

      </tr>
    </tbody>
  </table>

  <a href="{{route('checkout.payment')}}" class="button checkout-btn">Proceed to Payment</a>
@endsection
