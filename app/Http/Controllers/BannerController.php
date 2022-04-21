<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    public function index()
    {
        $banners = Banner::all();
        return view("/back/banners/all",compact("banners"));
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view("/back/banners/edit",compact("banner"));
    }
    public function update($id, Request $request)
    {
        $banner = Banner::find($id);
        $request->validate([
            'titre'=> 'required',
            'soustitre'=> 'required',
            'button'=> 'required',
        ]); // update_validated_anchor;
        $banner->titre = $request->titre;
        $banner->soustitre = $request->soustitre;
        $banner->button = $request->button;
        $banner->image = 'images/' . $request->file('image')->hashName();
        $banner->save(); // update_anchor
        $request->file('image')->storePublicly("images", "public");
        return redirect()->route("banner.index")->with("message", "Successful update !");
    }
}
