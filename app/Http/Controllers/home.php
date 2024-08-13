<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class home extends Controller
{
    public function index(Request $request)
    {
        $data = [];
        $data['list'] = DB::table('post')->where(['publish'=>1])->get();
        return view('home.index',$data);
    }
    public function login(Request $request)
    {
        if (auth()->user()!==null) {
            return redirect('/admin');
        }
        if ($request->method()==='POST') {
            $result = Auth::attempt(['email'=>$request->post('email'),'password'=>$request->post('password')]);
            if ($result) {
                $request->session()->regenerate();
                return redirect('/admin');
            }
        }else{
            return view('home.sign.login');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        echo '<script>alert("Logout Successfully")</script>';
        echo '<script>location.href = "/"</script>';
    }
    public function register(Request $request)
    {
        if ($request->method()==='POST') {
            $insert = [];
            $insert['full_name'] = $request->post('full_name');
            $insert['email']     = $request->post('email');
            $insert['gender']    = $request->post('gender');
            $insert['dob']       = $request->post('dob');
            $insert['password']  = Hash::make($request->post('password'));
            $insert['active']    = 1;
            $insert['role_id']    = 0;
            DB::table('users')->insert($insert);
            echo '<script>alert("User Registeration Successfully")</script>';
            echo '<script>location.href = "/login"</script>';
        }else{
            return view('home.sign.register');
        }
    }
}
