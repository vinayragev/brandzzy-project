@extends('admin.layout')

@section('title', 'Dashboard')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post / List </h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/admin/post/add" class="btn btn-outline-secondary">Add Post</a>
  </div>
</div>


<?php if (count($list)): ?>
  <table class="table table-striped">
    <tbody>
      <?php foreach ($list as $key => $value): ?>
      <tr>
        <td>{{$value->title}}</td>
        <td>
          <a href="/admin/post/edit?post_id={{ $value->post_id }}" class="btn btn-primary">Edit</a>
          <a href="/admin/post/delete?post_id={{ $value->post_id }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
<?php else: ?>
  <h3>No Post are added</h3>
<?php endif ?>



@endsection