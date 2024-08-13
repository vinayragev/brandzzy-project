@extends('admin.layout')

@section('title', 'Dashboard')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">User / List </h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/admin/user/add" class="btn btn-outline-secondary">Add User</a>
  </div>
</div>


<?php if (count($list)): ?>
  <table class="table table-striped">
    <tbody>
      <?php foreach ($list as $key => $value): ?>
      <tr>
        <td>{{$value->full_name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->dob}}</td>
        <td>{{$value->gender}}</td>
        <td>{{$value->role_name}}</td>
        <td>
          <a href="/admin/user/edit?user_id={{ $value->id }}" class="btn btn-primary">Edit</a>
          <a href="/admin/user/delete?user_id={{ $value->id }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
<?php else: ?>
  <h3>No Users are added</h3>
<?php endif ?>



@endsection