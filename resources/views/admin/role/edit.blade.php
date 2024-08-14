@extends('admin.layout')

@section('title', 'Role edit')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Role / Edit </h1>
</div>


<form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Role Name</label>
      <input type="text" class="form-control" name="role_name" value="{{ $item->role_name }}" placeholder="Role Name">
    </div>
    </div>
<br>
<h4>Role Permission</h4>

<table class="table table-sm">
  <tbody>
<?php foreach ($routesList as $key => $value): ?>
  <?php if (str_contains($value->uri(),'admin/')): ?>
    <tr>
      <td>{{$value->uri()}}</td>
      <td>
        <select class="form-select role_permission" data-url="{{$value->uri()}}">
          <option value="1">Allowed</option>
          <option value="0">Not Allowed</option>
        </select>
      </td>
    </tr>
  <?php endif ?>
<?php endforeach ?>
  </tbody>
</table>
    <input type="hidden" name="role_permission">

    <input type="submit" value="Submit">
    @csrf
  </form>

<script type="text/javascript">
  $('[data-url]').val(0)

<?php foreach ($auth as $key => $value): ?>
  $('[data-url="{{$value}}"]').val(1)
<?php endforeach ?>


  $('.role_permission').change(function () {
    role_permission = [];
    for (var i = 0; i < $('.role_permission').length; i++) {
      if($('.role_permission').eq(i).val()==='1'){
        role_permission.push($('.role_permission').eq(i).attr('data-url'))
      }
    }
    $('[name="role_permission"]').val(role_permission.join(','))
    console.log(role_permission);
  })
</script>
@endsection