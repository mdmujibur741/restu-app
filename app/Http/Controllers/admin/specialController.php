<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Special;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;

class specialController extends Controller
{
      public function index()
      {
            $special = Special::latest()->paginate(20);
            return view('admin.special.index',compact('special'));
      }

      public function create()
      {
              return view('admin.special.create');
      }

      public function store(Request $request)
      {
         
            $validated =  $request->validate([
                  'title' => 'required',
                  'subtitle' => 'required',
                  'description' => 'required',	
                  'StartDateTime' => 'required',
                  'EndTime' => 'required',
             ]);

             $special = new Special();
             $special->title = $request->title;
             $special->subtitle = $request->subtitle;
             $special->description = $request->description;
             $special->StartDateTime = $request->StartDateTime;
             $special->EndTime = $request->EndTime;
             $special->save();
             Session::flash('success','Special Event Add Successfully!');
             return redirect()->back();

      }

      public function show($id)
      {
            $special = Special::find($id);
            if($special->status == 1){
                  $special->status = 0;
                  $special->update();
                  Session::flash('success','Status Deactivate Successfully');
                  return redirect()->back();
            }else{
                  $special->status = 1;
                  $special->update();
                  Session::flash('success','Status Activate Successfully');
                  return redirect()->back();
            }
          
      }


      public function edit($editId)
      {
              $id = Crypt::decryptString($editId);
              $special = Special::find($id);
              return view('admin.special.edit',compact('special'));
      }


      public function update(Request $request,$id)
      {
            $validated =  $request->validate([
                  'title' => 'required',
                  'subtitle' => 'required',
                  'description' => 'required',	
                  'StartDateTime' => 'required',
                  'EndTime' => 'required',
             ]);

             $special = Special::find($id);
             $special->title = $request->title;
             $special->subtitle = $request->subtitle;
             $special->description = $request->description;
             $special->StartDateTime = $request->StartDateTime;
             $special->EndTime = $request->EndTime;
             $special->update();
             Session::flash('success','Special Event Update Successfully!');
             return redirect()->route('admin.special.index');
      }

      public function destroy(Request $request, $id)
      {
            $special = Special::find($id);
            $special->delete();
            Session::flash('success','Special Event Delete Successfully!');
            return redirect()->route('admin.special.index');
      }
}
