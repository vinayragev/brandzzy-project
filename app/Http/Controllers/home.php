<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class home extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
