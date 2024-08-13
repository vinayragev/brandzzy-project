<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\home;

// Route::get('/', function () {
//     return view('welcome');
// });


 
Route::get('/', [home::class, 'index']);
Route::get('/admin', [admin::class, 'index']);
Route::match(["GET","POST"],'/admin/role/add', [admin::class, 'role_add']);
Route::match(["GET","POST"],'/admin/role/edit', [admin::class, 'role_edit']);
Route::match(["GET","POST"],'/admin/role/list', [admin::class, 'role_list']);
Route::match(["GET","POST"],'/admin/role/delete', [admin::class, 'role_delete']);

Route::match(["GET","POST"],'/admin/user/add', [admin::class, 'user_add']);
Route::match(["GET","POST"],'/admin/user/edit', [admin::class, 'user_edit']);
Route::match(["GET","POST"],'/admin/user/list', [admin::class, 'user_list']);
Route::match(["GET","POST"],'/admin/user/delete', [admin::class, 'user_delete']);

Route::match(["GET","POST"],'/admin/post/add', [admin::class, 'post_add']);
Route::match(["GET","POST"],'/admin/post/edit', [admin::class, 'post_edit']);
Route::match(["GET","POST"],'/admin/post/list', [admin::class, 'post_list']);
Route::match(["GET","POST"],'/admin/post/delete', [admin::class, 'post_delete']);