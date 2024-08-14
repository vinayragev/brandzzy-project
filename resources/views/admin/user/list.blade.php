@extends('admin.layout')

@section('title', 'User List')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">User / List </h1>
        <?php if ($auth_add): ?>

  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/admin/user/add" class="btn btn-outline-secondary">Add User</a>
  </div>
        <?php endif ?>
</div>


<?php if (count($list)): ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Role Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($list as $key => $value): ?>
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->full_name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->dob}}</td>
        <td>{{$value->gender}}</td>
        <td>{{$value->role_name}}</td>
        <td>

<?php if ($auth_edit): ?>
  
          <a href="/admin/user/edit?user_id={{ $value->id }}" class="btn btn-primary">Edit</a>
<?php endif ?>
<?php if ($auth_delete): ?>
          <a href="/admin/user/delete?user_id={{ $value->id }}" class="btn btn-danger">Delete</a>
  
<?php endif ?>

        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
    <tfoot>
      <tr>
        <th>#</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Role Name</th>
        <th>Action</th>
      </tr>
    </tfoot>
  </table>
<?php else: ?>
  <h3>No Users are added</h3>
<?php endif ?>



@endsection