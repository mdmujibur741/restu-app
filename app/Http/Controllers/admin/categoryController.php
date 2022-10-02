<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
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
         return redirect()->back();

   }
}
