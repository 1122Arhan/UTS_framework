<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stand;

class StandController extends Controller
{
    public function index()
    {
        $no = 1;
        $std = Stand::all();
        return view('stand.index', compact('no', 'std'));
    }

    public function create()
    {
        return view('stand.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $std = new Stand;
        $std->kd_stand = $request->kd_stand;
        $std->stand    = $request->stand;
        $std->telp     = $request->telp;
        $std->save();

        return redirect('/stand/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $std = Stand::find($id);
        return view('stand.edit', compact('std'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $std = Stand::find($id);
        $std->kd_stand = $request->kd_stand;
        $std->stand    = $request->stand;
        $std->telp     = $request->telp;
        $std->save();

        return redirect('/stand/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
