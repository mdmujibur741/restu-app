<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tableController extends Controller
{
    public function index()
    {
           return view('admin.table.index');
    }
    public function create()
   {
        return view('admin.table.create');
   }
}
