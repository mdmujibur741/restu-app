<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class statusController extends Controller
{
      public function index()
      {
          $status = status::latest()->paginate(10);
             return view('admin.status.index',compact('status'));
      }

      public function create()
      {
          return view('admin.status.create');
      }

      public function store(Request $request)
      {
                $request->validate([
                       'name' => 'required',
                ]);

                $status = new status();

                $status->name = $request->name;
                $status->slug = Str::slug($request->name,'-');
                $status->save();
                Session::flash('success', 'Status added successfully!');
                return redirect()->back();
      }

      public function edit($editId)
      {
           $id = Crypt::decryptString($editId);
           $status = status::find($id);
           return view('admin.status.edit',compact('status'));
      }

      public function update(Request $request,$id)
      {
        $request->validate([
            'name' => 'required',
     ]);

     $status = status::find($id);

     $status->name = $request->name;
     $status->slug = Str::slug($request->name,'-');
     $status->update();
     Session::flash('success', 'Status Updated successfully!');
     return redirect()->route('admin.status.index');
      }

      public function destroy(Request $request, $id)
      {
           $status = status::find($id);
           $status->delete();
           Session::flash('success', 'Status Delete successfully!');
           return redirect()->back();

      }
}
