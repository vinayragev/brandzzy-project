<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\home;
use App\Http\Middleware\roleCheck;

// Route::get('/', function () {
//     return view('welcome');
// });







Route::get('/', [home::class, 'index']);
Route::get('/index', [home::class, 'index']);
Route::match(["GET","POST"],   '/register', [home::class, 'register']);
Route::match(["GET","POST"],   '/login',    [home::class, 'login']);
Route::match(["GET"],          '/logout',   [home::class, 'logout']);

 
Route::get('/admin', [admin::class, 'index']);
Route::match(["GET","POST"],'/admin/role/add', [admin::class, 'role_add'])->middleware([roleCheck::class]);
Route::match(["GET","POST"],'/admin/role/edit', [admin::class, 'role_edit'])->middleware([roleCheck::class]);
Route::match(["GET","POST"],'/admin/role/list', [admin::class, 'role_list'])->middleware([roleCheck::class]);
Route::match(["GET","POST"],'/admin/role/delete', [admin::class, 'role_delete'])->middleware([roleCheck::class]);

Route::match(["GET","POST"],'/admin/user/add', [admin::class, 'user_add'])->middleware([roleCheck::class]);
Route::match(["GET","POST"],'/admin/user/edit', [admin::class, 'user_edit'])->middleware([roleCheck::class]);
Route::match(["GET","POST"],'/admin/user/list', [admin::class, 'user_list'])->middleware([roleCheck::class]);
Route::match(["GET","POST"],'/admin/user/delete', [admin::class, 'user_delete'])->middleware([roleCheck::class]);

Route::match(["GET","POST"],'/admin/post/add', [admin::class, 'post_add'])->middleware([roleCheck::class]);
Route::match(["GET","POST"],'/admin/post/edit', [admin::class, 'post_edit'])->middleware([roleCheck::class]);
Route::match(["GET","POST"],'/admin/post/list', [admin::class, 'post_list'])->middleware([roleCheck::class]);
Route::match(["GET","POST"],'/admin/post/delete', [admin::class, 'post_delete'])->middleware([roleCheck::class]);
Route::match(["GET"],'/admin/post/publish', [admin::class, 'post_publish'])->middleware([roleCheck::class]);