<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\location;
use App\Models\status;
use App\Models\table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class tableController extends Controller
{
    public function index()
    {
           $table = table::orderBy('created_at', 'DESC')->paginate(20);
           return view('admin.table.index',compact('table'));
    }
    public function create()
   {
         $status = status::all();
         $location = location::all();
        return view('admin.table.create',compact('status', 'location'));
   }

   public function store(Request $request)
   {
        $request->validate([
             'name' => 'required',
             'guests' => 'required|integer',
             'status' => 'required',
             'location' => 'required',
        ]);

        $table = new table();
        $table->name = $request->name;
        $table->slug = Str::slug( $request->name,'-');
        $table->guests =$request->guests;
        $table->status_id = $request->status;
        $table->location_id = $request->location;
        $table->save();
        Session::flash('success','Table Data Added Success!');
        return redirect()->back();
   }

   public function edit($editId)
   {
        $id = Crypt::decryptString($editId);
        $table = table::find($id);
        $location = location::all();
        $status = status::all();
        return view('admin.table.edit',compact('table','location','status'));
   }

   public function update(Request $request, $id)
   {
     $request->validate([
          'name' => 'required',
          'guests' => 'required|integer',
          'status' => 'required',
          'location' => 'required',
     ]);

     $table = table::find($id);
     $table->name = $request->name;
     $table->slug = Str::slug( $request->name,'-');
     $table->guests =$request->guests;
     $table->status_id = $request->status;
     $table->location_id = $request->location;
     $table->update();
     Session::flash('success','Table Data Updated Success!');
     return redirect()->route('admin.table.index');
   }


   public function destroy(Request $request, $id)
   {
          $table = table::find($id);
          $table->delete();
          Session::flash('success','Table Data Delete Success!');
          return redirect()->route('admin.table.index');
   }
}
