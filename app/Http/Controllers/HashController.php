<?php

namespace App\Http\Controllers;

use App\Hash;
use Illuminate\Http\Request;

class HashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hashes = Hash::all();
        return view('admin.hash.index', compact('hashes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hash  $hash
     * @return \Illuminate\Http\Response
     */
    public function show(Hash $hash)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hash  $hash
     * @return \Illuminate\Http\Response
     */
    public function edit(Hash $hash)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hash  $hash
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hash $hash)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hash  $hash
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hash $hash)
    {
        //
    }
}
