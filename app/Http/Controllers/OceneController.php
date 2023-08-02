<?php

namespace App\Http\Controllers;

use App\Models\Ocene;
use App\Models\User;
use Illuminate\Http\Request;

class OceneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addGrade(Request $request){
        $request->validate([
            "predmet" => 'required|string',
            "ocena" => 'required|integer|min:1|max:5',
            "profesor" => 'required|string'
        ]);

        Ocene::create([
            "predmet" => $request->get('predmet'),
            "ocena" => $request->get('ocena'),
            "profesor" => $request->get('profesor')
        ]);
        return redirect('/');
    }
    public function index()
    {
        return view('welcome', [
            "ocene" => Ocene::all(),
        ]);

//                $ocene = Ocene::all();
//
//        return view('welcome', [
//            "ocene" => $ocene,
//        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ocene $ocena)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ocene $ocena)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ocene $ocena)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ocene $ocena)
    {
        //
    }
}
