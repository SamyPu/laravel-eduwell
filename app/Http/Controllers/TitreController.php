<?php

namespace App\Http\Controllers;

use App\Models\Titre;
use Illuminate\Http\Request;

class TitreController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('role');
        $this->middleware('admin');
    }
    public function index()
    {
        $titres = Titre::all();
        return view("/back/titres/all",compact("titres"));
    }
    public function edit($id)
    {
        $titre = Titre::find($id);
        return view("/back/titres/edit",compact("titre"));
    }
    public function update($id, Request $request)
    {
        $titre = Titre::find($id);
        $request->validate([
            'nom'=> 'required',
            'description'=> 'required',
        ]); // update_validated_anchor;
        $titre->nom = $request->nom;
        $titre->description = $request->description;
        $titre->save(); // update_anchor
        return redirect()->route("titre.index")->with("message", "Successful update !");
    }
}
