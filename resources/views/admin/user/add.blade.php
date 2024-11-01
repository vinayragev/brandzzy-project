@extends('admin.layout')

@section('title', 'User Add')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">User / Add </h1>
</div>


<form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>full_name</label>
      <input type="text" class="form-control" name="full_name" placeholder="full_name">
    </div>
    <div class="form-group col-md-6">
      <label>email</label>
      <input type="email" class="form-control" name="email" placeholder="email">
    </div>
    <div class="form-group col-md-6">
      <label>gender</label>
      <input type="text" class="form-control" name="gender" placeholder="gender">
    </div>
    <div class="form-group col-md-6">
      <label>dob</label>
      <input type="date" class="form-control" name="dob" placeholder="dob">
    </div>
    <div class="form-group col-md-6">
      <label>password</label>
      <input type="password" class="form-control" name="password" placeholder="password">
    </div>
    <div class="form-group col-md-6">
      <label>active</label>
      <select class="form-select" name="active" >
        <option value="1">Active</option>
        <option value="0">Deactive</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label>role</label>
      <select class="form-select" name="role_id" >
        <?php foreach ($role as $key => $value): ?>
          <option value="{{ $value->role_id }}">{{ $value->role_name }}</option>
        <?php endforeach ?>
      </select>
    </div>
  </div>

  <input type="submit" value="Submit">

  @csrf
</form>

@endsection