<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class categoryController extends Controller
{
   public function index()
   {
          $category = category::all();
          return view('admin.category.index',compact('category'));
   }

   public function create()
   {
        return view('admin.category.create');
   }

   public function store(Request $request)
   {
        $request->validate([
               'name' => 'required',
               'description' => 'required',
               'image' => 'required|image',
        ]);

         $category = new category();
         $category->name = $request->name;
         $category->slug = Str::slug($request->name,'-');
         $category->description = $request->description;

         // image store
         $image = $request->file('image');
         Storage::putFile('public/category',$image);
         $category->image = 'storage/category/'.$image->hashName();
         $category->save();
         Session::flash('success','Category Add Successfully');
         return redirect()->back();

   }

   public function edit($editId)
   {
         $id = Crypt::decryptString($editId);
         $category = category::find($id);
         return view('admin.category.edit',compact('category'));
   }

   public function update(Request $request,$id)
   {
       $request->validate([
              'name' => 'required',
              'description' => 'required',
       ]);

        $category = category::find($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name,'-');
        $category->description = $request->description;

        // image store
        if($request->file('image')){
                if( File::exists($category->image)){
                       File::delete($category->image);
                 }
                 $image = $request->file('image');
                 Storage::putFile('public/category',$image);
                 $category->image = 'storage/category/'.$image->hashName();
        }
       
        $category->update();
        Session::flash('success','Category Update Successfully');
        return redirect()->route('admin.category.index');
   }

   public function destroy(Request $request,$id)
   {
         $category = category::find($id);
         if( File::exists($category->image)){
              File::delete($category->image);
        }
         $category->delete();
         Session::flash('success','Category Delete Successfully');
         return redirect()->back();

   }
}
