<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    //
    // public function __construct()
    // {
    //     // $this->middleware('role');
    //     $this->middleware('admin');
    //     $this->middleware('webmaster');
    // }
    public function index()
    {
        $maps = Map::all();
        return view("/back/maps/all",compact("maps"));
    }
    public function edit($id)
    {
        $map = Map::find($id);
        return view("/back/maps/edit",compact("map"));
    }
    public function update($id, Request $request)
    {
        $map = Map::find($id);
        $request->validate([
            'nom'=> 'required',
        ]); // update_validated_anchor;
        $map->nom = $request->nom;
        $map->save(); // update_anchor
        return redirect()->route("map.index")->with("message", "Successful update !");
    }
}
