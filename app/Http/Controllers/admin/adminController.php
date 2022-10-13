<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\contact;
use App\Models\menu;
use App\Models\reservation;
use App\Models\table;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function index()
    {
         $contact = contact::latest()->take(15)->get();
         $message_count = contact::all()->count();
         $category_count = category::all()->count();
         $table_count = table::all()->count();
         $sDate = Carbon::today();
         $reservation_count = reservation::orderBy('resDate')->where('resDate', '>=', $sDate)->get()->count();
         return view('admin.index',compact('contact','reservation_count','table_count','category_count','message_count'));
    }


    public function message()
    {
         $message = contact::latest()->paginate(20);
         return view('admin.message.index',compact('message'));
    }

    public function messageDelete(Request $request, $id)
    {
         $contact = contact::find($id);
         $contact->delete();
         Session::flash('success','Message Delete Successfully! ');
         return redirect()->back();
    }
}
