<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;

class locationController extends Controller
{
    public function index()
    {
        $location = location::latest()->paginate(10);
           return view('admin.location.index',compact('location'));
    }

    public function create()
    {
        return view('admin.location.create');
    }

    public function store(Request $request)
    {
              $request->validate([
                     'name' => 'required',
              ]);

              $location = new location();
              $location->name = $request->name;
              $location->slug = Str::slug($request->name,'-');
              $location->save();
              Session::flash('success', 'Location added successfully!');
              return redirect()->back();
    }

    public function edit($editId)
    {
         $id = Crypt::decryptString($editId);
         $location = location::find($id);
         return view('admin.location.edit',compact('location'));
    }

    public function update(Request $request,$id)
    {
      $request->validate([
          'name' => 'required',
   ]);

   $location = location::find($id);
   $location->name = $request->name;
   $location->slug = Str::slug($request->name,'-');
   $location->update();
   Session::flash('success', 'Location Updated successfully!');
   return redirect()->route('admin.location.index');
    }

    public function destroy(Request $request, $id)
    {
         $location = location::find($id);
         $location->delete();
         Session::flash('success', 'Location Delete successfully!');
         return redirect()->back();

    }
}
