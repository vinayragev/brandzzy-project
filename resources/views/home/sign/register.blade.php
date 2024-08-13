@extends('home.sign.layout')

@section('title', 'Dashboard')

@section('main')
  <form method="POST">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Full Name">
      <label for="full_name">Full Name</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="gender" id="gender" placeholder="Gender">
      <label for="gender">Gender</label>
    </div>
    <div class="form-floating">
      <input type="date" class="form-control" name="dob" id="dob" placeholder="Password">
      <label for="dob">Date of Birth</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
    @csrf    
  </form>
  <br>
<a href="/login" class="btn btn-info w-100">Login</a>
@endsection