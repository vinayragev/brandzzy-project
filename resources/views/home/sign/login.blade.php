@extends('home.sign.layout')

@section('title', 'Dashboard')

@section('main')
  <form method="POST">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

@csrf    
    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
  </form>
  <br>
<a href="/register" class="btn btn-info w-100">register</a>

@endsection