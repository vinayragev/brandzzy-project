@extends('admin.layout')

@section('title', 'Dashboard')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Role / List </h1>
        <?php if ($auth_add): ?>

  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/admin/role/add" class="btn btn-outline-secondary">Add Role</a>
  </div>
        <?php endif ?>
</div>

<?php if (count($list)): ?>
  <table class="table table-striped">
    <tbody>
      <?php foreach ($list as $key => $value): ?>
      <tr>
        <td>{{$value->role_name}}</td>
        <td>


        <?php if ($auth_edit): ?>
          <a href="/admin/role/edit?role_id={{ $value->role_id }}" class="btn btn-primary">Edit</a>
        <?php endif ?>
        <?php if ($auth_delete): ?>
          <a href="/admin/role/delete?role_id={{ $value->role_id }}" class="btn btn-danger">Delete</a>
        <?php endif ?>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
<?php else: ?>
  <h3>No roles are added</h3>
<?php endif ?>



@endsection