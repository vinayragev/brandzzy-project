@extends('admin.layout')

@section('title', 'Post List')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post / List </h1>
        <?php if ($auth_add): ?>
  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="/admin/post/add" class="btn btn-outline-secondary">Add Post</a>
  </div>
        <?php endif ?>
</div>


<?php if (count($list)): ?>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Published</th>
        <th>action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($list as $key => $value): ?>
      <tr>
        <td>{{$value->title}}</td>
        <td>
            
          <input type="checkbox" class="form-check-input published" data-post-id="{{ $value->post_id }}" name="published"
          <?php if (!$auth_publish): ?>
            disabled
          <?php endif ?>
          <?php if ($value->publish): ?>
            checked
          <?php endif ?>
          >
        </td>
        <td>

        <?php if ($auth_edit): ?>
          <a href="/admin/post/edit?post_id={{ $value->post_id }}" class="btn btn-primary">Edit</a>

        <?php endif ?>

        <?php if ($auth_delete): ?>

          <a href="/admin/post/delete?post_id={{ $value->post_id }}" class="btn btn-danger">Delete</a>
        <?php endif ?>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
    <tfoot>
      <tr>
        <th>Title</th>
        <th>Published</th>
        <th>action</th>
      </tr>
    </tfoot>
  </table>
<?php else: ?>
  <h3>No Post are added</h3>
<?php endif ?>


<script type="text/javascript">
  $('.published').change(function () {
    data = {post_id:$(this).attr('data-post-id'),value:$(this).prop('checked')}
    $.ajax({
      type:"GET",
      url:"/admin/post/publish",
      data:data,
    })
  });
</script>
@endsection