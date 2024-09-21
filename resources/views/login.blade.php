@extends('components.layout')
@section('title','This is login page')

@section('main')
<div class="main">
  <h1>User login page</h1>

  <form action="login" method="post">
      @csrf
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" name="user" class="form-control" id="staticEmail" value="email@example.com">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" name="password" placeholder="Enter password" class="form-control" id="inputPassword">
        </div>
      </div>
      <br>
      <br>
      <button onclick="changeColor()" type="button" class="btn btn-primary">Login</button>
      <button onclick="greenColor()">Login</button>
    </form>
</div>
@endsection
