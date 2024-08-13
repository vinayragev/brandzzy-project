@extends('admin.layout')

@section('title', 'Dashboard')

@section('main')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">admin / dashboard </h1>
</div>

<?php if ($request->get('error')==='auth'): ?>
  <h2 style="color:red;">Authrization error</h2>
<?php endif ?>

@endsection