@extends('layouts.manage')

@section('content')
  <div class="management-area">
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Create New Users</h1>
      </div>
    </div>
  </div>
  <hr class="m-t-10">
  <div class="columns">
    <div class="column">
      <form class="" action="{{route('users.store')}}" method="post">

        <div class="field">
          <label for="name" class="label">Name</label>
          <p class="control">
            <input type="text" class="input" name="name" id="name">
          </p>
        </div>

        <div class="field">
          <label for="email" class="label">Email:</label>
          <p class="control">
            <input type="text" class="input" name="name" id="email">
          </p>
        </div>

        <div class="field">
          <label for="password" class="label">Password</label>
          <p class="control">
            <input type="text" class="input" name="password" id="password" :disabled="auto_password">
            <b-checkbox name="auto_generate" class="m-t-15" :checked="true" v-model="auto_password">Auto Generate Password</b-checkbox>
          </p>
        </div>

        <button class="button is-success">Create User</button>
      </form>
    </div>
  </div>
  </div>

@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: 'app',
      data: {
        auto_password: true
      }
    })
  </script>
@endsection
