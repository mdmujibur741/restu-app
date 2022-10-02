<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class reservationController extends Controller
{
    public function index()
    {
           return view('admin.reservation.index');
    }
    public function create()
   {
        return view('admin.reservation.create');
   }
}
