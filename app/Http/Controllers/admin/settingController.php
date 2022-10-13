<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class settingController extends Controller
{
    public function create()
    {
        $setting = setting::first();
        return view('admin.setting.edit', compact('setting'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'restName' => 'required',
            'homeTitle' => 'required',
            'homeSubtitle' => 'required',
            'menuTitle' => 'required',
            'menuDescription' => 'required',
            'eventName' => 'required',
        ]);


        $setting = new setting();
        $setting->restName = $request->restName;
        $setting->homeTitle = $request->homeTitle;
        $setting->homeSubtitle = $request->homeSubtitle;
        $setting->menuTitle = $request->menuTitle;
        $setting->menuDescription = $request->menuDescription;
        $setting->eventName = $request->eventName;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->pinterest = $request->pinterest;
        $setting->linkedin  = $request->linkedin;
        $setting->instagram = $request->instagram;
        $setting->save();
        Session::flash('success', 'Setting Added Successsfully!');
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'restName' => 'required',
            'homeTitle' => 'required',
            'homeSubtitle' => 'required',
            'menuTitle' => 'required',
            'menuDescription' => 'required',
            'eventName' => 'required',
        ]);


        $setting = setting::find($id);
        $setting->restName = $request->restName;
        $setting->homeTitle = $request->homeTitle;
        $setting->homeSubtitle = $request->homeSubtitle;
        $setting->menuTitle = $request->menuTitle;
        $setting->menuDescription = $request->menuDescription;
        $setting->eventName = $request->eventName;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->pinterest = $request->pinterest;
        $setting->linkedin  = $request->linkedin;
        $setting->instagram = $request->instagram;
        $setting->save();
        Session::flash('success', 'Setting Data Updated Successsfully!');
        return redirect()->back();
    }
}
