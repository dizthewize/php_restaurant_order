@extends('layouts.manage')

@section('content')

  <div class="row">
    <div class="col-sm-offset-1 col-md-4">
      <h3>All Items</h3>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-offset-1 col-lg-11 col-md-11">

    <ul>

      @foreach ($orders as $order)
        <li>
          <h4>Order by {{$order->user_name}}</h4>

          <h5>Items</h5>

          <table class="table table-border">
            <tr>
              <th>Name</th>
              <th>qty</th>
              <th>Price</th>
            </tr>
            @foreach ($order->$orderItems as $item)
              <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->pivot->qty}}</td>
                <td>{{$item->pivot->total}}</td>
              </tr>
            @endforeach

          </table>

        </li>

      @endforeach

    </ul>

  </div>

  </div>



        {{-- <div class="text-center">
          {{ $orders->links() }}
        </div> --}}

@endsection
