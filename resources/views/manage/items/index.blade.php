@extends('layouts.manage')

@section('content')
  <div class="row">
    <div class="col-sm-offset-1 col-md-4">
      <h3>All Items</h3>
    </div>

    <div class="col-md-2">
      <a href="{{ route('items.create') }}" class="btn btn-lg btn-primary btn-fix">Add Item</a>
    </div>

    <div class="row">
      <div class="col-sm-offset-1 col-lg-11 col-md-11">
        <table class="table">
          <thead>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th>Created At</th>
            <th>Actions</th>
          </thead>
          <tbody>

            @foreach ($foods as $food)

              <tr>
                <td><img src="/img/{{$food->image}}" class="thumbnail-img"></td>
                <td class="item-name">{{$food->name}}</td>
                <td>{{ substr($food->description, 0, 50)}}{{ strlen($food->description) > 30 ? "..." : ""}}</td>
                <td>{{date('M j, Y', strtotime($food->created_at))}}</td>
                <td>
                  <a href="{{route('items.show', $food->id)}}" class="btn btn-default btn-sm">View</a>
                  <a href="{{route('items.edit', $food->id)}}" class="btn btn-default btn-sm">Edit</a>
                  {!!Form::open(['action' => ['ItemsController@destroy', $food->id], 'method' => 'Post'])!!}
                      {{Form::hidden('_method', 'DELETE')}}
                      {{Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
                  {!!Form::close()!!}
                </td>
              </tr>

            @endforeach

          </tbody>
        </table>

        <div class="text-center">
          {{ $foods->links() }}
        </div>

      </div>
    </div>
  </div>
@endsection
