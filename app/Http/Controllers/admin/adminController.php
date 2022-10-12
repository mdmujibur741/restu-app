<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index()
    {
         return view('admin.index');
    }

    public function dashboard()
    {
        return view('admin.master');
    }
}
