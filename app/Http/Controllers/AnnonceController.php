<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annonces = Annonce::all();
        return view('annonce.index', compact('annonces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('annonce.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        if($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('annonces', 'public');
        }
        
        Annonce::create($data);

        return redirect()->route('annonces.index')
               ->with('success','Annonce ajoutée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Annonce $annonce)
    {
        return view('annonce.show', compact('annonce'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Annonce $annonce)
    {
        return view('annonce.edit', compact('annonce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Annonce $annonce)
    {
        $data = $request->all();
        
        if($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('annonces', 'public');
        }
        
        $annonce->update($data);

        return redirect()->route('annonces.index')
            ->with('success','Annonce modifiée');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();

        return redirect()->route('annonces.index')
            ->with('success','Annonce supprimée');
    }

    /**
     * Display dashboard with statistics.
     */
    public function dashboard()
    {
        $stats = [
            'total' => Annonce::count(),
            'prix_total' => Annonce::sum('prix'),
            'prix_moyen' => Annonce::avg('prix'),
            'superficie_total' => Annonce::sum('superficie')
        ];

        return view('annonce.dashboard', compact('stats'));
    }
}

