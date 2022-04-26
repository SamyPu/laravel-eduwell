<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    //
    // public function __construct()
    // {
    //     //$this->middleware('role');
    //     $this->middleware('admin');
    //     $this->middleware('webmaster');
    // }
    public function index()
    {
        $testimonials = Testimonial::all();
        return view("/back/testimonials/all",compact("testimonials"));
    }
    public function create()
    {
        return view("/back/testimonials/create");
    }
    public function store(Request $request)
    {
        $this->authorize('create', Testimonial::class);

        $testimonial = new Testimonial;
        $request->validate([
            'nom'=> 'required',
            'poste'=> 'required',
            'quote'=> 'required',
        ]); // store_validated_anchor;
        $testimonial->nom = $request->nom;
        $testimonial->poste = $request->poste;
        $testimonial->quote = $request->quote;
        $testimonial->save(); // store_anchor
        return redirect()->route("testimonial.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/show",compact("testimonial"));
    }
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view("/back/testimonials/edit",compact("testimonial"));
    }
    public function update($id, Request $request)
    {
        $testimonial = Testimonial::find($id);

        $this->authorize('update', $testimonial);

        $request->validate([
            'nom'=> 'required',
            'poste'=> 'required',
            'quote'=> 'required',
        ]); // update_validated_anchor;
        $testimonial->nom = $request->nom;
        $testimonial->poste = $request->poste;
        $testimonial->quote = $request->quote;
        $testimonial->save(); // update_anchor
        return redirect()->route("testimonial.index")->with("message", "Successful update !");
    }
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);

        $this->authorize('delete', $testimonial);

        $testimonial->delete();
        return redirect()->back()->with("message", "Successful delete !");
    }
}
