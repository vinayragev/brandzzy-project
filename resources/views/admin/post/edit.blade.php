@extends('admin.layout')

@section('title', 'Dashboard')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post / Edit </h1>
</div>



<form method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Title</label>
      <input type="text" class="form-control" name="title" value="{{ $item->title }}" placeholder="Title">
    </div>
    <div class="form-group col-md-6">
      <label>content</label>
      <textarea type="email" class="form-control" name="text" placeholder="Content">{{ $item->text }}</textarea>
    </div>
  </div>
  <input type="submit" value="Submit">
  @csrf
</form>
@endsection