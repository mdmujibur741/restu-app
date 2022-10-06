<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class menuController extends Controller
{
    public function index()
    {
             $menu = menu::latest()->paginate(20);
           return view('admin.menu.index',compact('menu'));
    }

    public function create()
   {
        $category = category::all();
        return view('admin.menu.create',compact('category'));
   }

   public function store(Request $request)
   {

        $request->validate([
              'name' => 'required',
              'price' => 'required',
              'description' => 'required',
              'image' => 'required|image',

        ]);

        $menu = new menu();
        $menu->name = $request->name;
        $menu->slug = Str::slug($request->name,'-');
        $menu->price = $request->price;
        $menu->description = $request->description;

     //    image
        $image = $request->file('image');
        Storage::putFile('public/menu/',$image);
        $menu->image = 'Storage/menu/'.$image->hashName();

        $menu->save();
        $menu->category()->attach($request->category);
        Session::flash('success','Menu Data added Successfully!');
        return redirect()->back();

   }

   public function edit($editId)
   {
        $id = Crypt::decryptString($editId);
        $menu = menu::find($id);
        $category = category::all();
        return view('admin.menu.edit',compact('category','menu'));
   }

   public function update(Request $request, $id)
   {
          $request->validate([
               'name' => 'required',
               'price' => 'required',
               'description' => 'required',

     ]);

          $menu = menu::find($id);
          $menu->name = $request->name;
          $menu->slug = Str::slug($request->name,'-');
          $menu->price = $request->price;
          $menu->description = $request->description;

          // image
          if($request->file('image')){
               if(File::exists($menu->image)){
                     File::delete($menu->image);
               }
               $image = $request->file('image');
               Storage::putFile('public/menu/',$image);
               $menu->image = 'Storage/menu/'.$image->hashName();
          }

          $menu->category()->sync($request->category);
          $menu->update();
          Session::flash('success','Menu Data added Successfully!');
          return redirect()->route('admin.menu.index');
   }


   public function destroy(Request $request, $id)
   {
       $menu = menu::find($id);
       $menu->delete();
       if(File::exists($menu->image)){
              File::delete($menu->image);
       }
       Session::flash('success','Menu Item Delete Successfully!');
       return redirect()->back();
   }

  
}
