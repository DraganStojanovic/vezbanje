<?php

namespace App\Http\Controllers;

use App\Models\Ocene;
use Illuminate\Http\Request;

class OceneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        return view('welcome', [
//            "ocene" => Ocene::all(),
//        ]);

                $ocene = Ocene::all();

        return view('welcome', [
            "ocene" => $ocene,
        ]);

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
