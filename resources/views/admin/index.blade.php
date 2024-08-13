@extends('admin.layout')

@section('title', 'Dashboard')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">User / List </h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/user_add.php" class="btn btn-outline-secondary">Add User</a>
  </div>
</div>
@endsection