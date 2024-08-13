<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Route;

class admin extends Controller
{
    public function index(Request $request)
    {
        return view('admin/index');
    }

    public function user_add(Request $request)
    {
        if ($request->method()==='POST') {
            $insert = [];
            $insert['full_name'] = $request->post('full_name');
            $insert['email']     = $request->post('email');
            $insert['gender']    = $request->post('gender');
            $insert['dob']       = $request->post('dob');
            $insert['password']  = $request->post('password');
            $insert['active']    = $request->post('active');
            $insert['role_id']      = $request->post('role_id');
            DB::table('users')->insert($insert);
            echo '<script>alert("User added Successfully")</script>';
            echo '<script>location.href = "/admin/user/list"</script>';
        }else{
            $data = [];
            $data['role'] = DB::table('role')->get();
            return view('admin/user/add',$data);
        }
    }
    public function user_list(Request $request)
    {
        $data = [];
        $data['list'] = DB::table('users')->join('role', 'users.role_id', '=', 'role.role_id')->get();
        return view('admin/user/list', $data);
    }
    public function user_edit(Request $request)
    {
        if ($request->method()==='POST') {
            $update = [];
            $update['full_name'] = $request->post('full_name');
            $update['email']     = $request->post('email');
            $update['gender']    = $request->post('gender');
            $update['dob']       = $request->post('dob');
            $update['password']  = $request->post('password');
            $update['active']    = $request->post('active');
            $update['role_id']   = $request->post('role_id');
            DB::table('users')->where(['id'=>$request->get('user_id')])->update($update);
            echo '<script>alert("User Updated Successfully")</script>';
            echo '<script>location.href = "/admin/user/list"</script>';
        }else{
            $data = [];
            $data['item'] = DB::table('users')->where(['id'=>$request->get('user_id')])->first();
            $data['role'] = DB::table('role')->get();
            return view('admin/user/edit',$data);
        }
    }
    public function user_delete(Request $request)
    {
        DB::table('users')->where(['id'=>$request->get('user_id')])->delete();
        return redirect('/admin/user/list');
    }

    public function role_add(Request $request)
    {
        if ($request->method()==='POST') {
            DB::table('role')->insert(["role_name"=>$request->post('role_name')]);
            $role_permission = explode(',', $request->post('role_permission'));
            $insert = [];
            for ($i=0; $i < count($role_permission); $i++) { 
                $insert[] = ['pathname'=>$role_permission[$i],'role_id'=>DB::getPdo()->lastInsertId()];
            }
            if($insert){
                DB::table('auth')->insert($insert);
            }
            echo '<script>alert("Role added Successfully")</script>';
            echo '<script>location.href = "/admin/role/list"</script>';
        }else{
            $data = [];
            $data['routesList'] = Route::getRoutes();
            return view('admin/role/add',$data);
        }
    }
    public function role_list(Request $request)
    {
        $data = [];
        $data['list'] = DB::table('role')->get();
        return view('admin/role/list', $data);
    }
    public function role_edit(Request $request)
    {
        if ($request->method()==='POST') {
            DB::table('role')->where(['role_id'=>$request->get('role_id')])->update(["role_name"=>$request->post('role_name')]);
            $role_permission = explode(',', $request->post('role_permission'));
            DB::table('auth')->whereNotIn('pathname',$role_permission)->delete();
            $insert = [];
            for ($i=0; $i < count($role_permission); $i++) { 
                if(DB::table('auth')->where(['pathname'=>$role_permission[$i],'role_id'=>$request->get('role_id')])->count()){
                    continue;
                }
                $insert[] = ['pathname'=>$role_permission[$i],'role_id'=>$request->get('role_id')];
            }
            if($insert){
                DB::table('auth')->insert($insert);
            }
            echo '<script>alert("Role Updated Successfully")</script>';
            echo '<script>location.href = "/admin/role/list"</script>';
        }else{
            $data = [];
            $data['item'] = DB::table('role')->where(['role_id'=>$request->get('role_id')])->first();
            $auth = DB::table('auth')->where(['role_id'=>$request->get('role_id')])->get();
            $data['auth'] = [];
            foreach ($auth as $key => $value) {
                $data['auth'][] = $value->pathname;
            }
            $data['routesList'] = Route::getRoutes();
            return view('admin/role/edit',$data);
        }
    }
    public function role_delete(Request $request)
    {
        DB::table('role')->where(['role_id'=>$request->get('role_id')])->delete();
        return redirect('/admin/role/list');
    }


    public function post_add(Request $request)
    {
        if ($request->method()==='POST') {
            DB::table('post')->insert(["title"=>$request->post('title'),"text"=>$request->post('text')]);
            echo '<script>alert("Post added Successfully")</script>';
            echo '<script>location.href = "/admin/post/list"</script>';
        }else{
            return view('admin/post/add');
        }
    }
    public function post_list(Request $request)
    {
        $data = [];
        $data['list'] = DB::table('post')->get();
        return view('admin/post/list', $data);
    }
    public function post_edit(Request $request)
    {
        if ($request->method()==='POST') {
            DB::table('post')->where(['post_id'=>$request->get('post_id')])->update(["title"=>$request->post('title'),"text"=>$request->post('text')]);
            echo '<script>alert("Post Updated Successfully")</script>';
            echo '<script>location.href = "/admin/post/list"</script>';
        }else{
            $data = [];
            $data['item'] = DB::table('post')->where(['post_id'=>$request->get('post_id')])->first();
            return view('admin/post/edit',$data);
        }
    }
    public function post_delete(Request $request)
    {
        DB::table('post')->where(['post_id'=>$request->get('post_id')])->delete();
        return redirect('/admin/post/list');
    }
}
