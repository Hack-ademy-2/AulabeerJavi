<?php

namespace App\Http\Controllers;

use App\Models\Beers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeerController extends Controller
{
    
    public function store(Request $request)
    {
        //dd($request->all());

        $request->except('_token');

        $request = request()->validate([
            'name' => 'required | min:6',
            'tipo' => 'required | min:6',
            'image' => 'required | min:6',
        ]);


        $beers = New Beers;
        $beers->name = $request->name;
        $beers->tipo = $request->tipo;
        $beers->image = $request->image;
        $beers->category = $request->category;

        $beers->save();

        return redirect()->route('home');

    }
    public function show(Beers $beers)
    {
        $cerverzas = Beers::all();

        return view('beers', compact('cerverzas'));
    }
}
