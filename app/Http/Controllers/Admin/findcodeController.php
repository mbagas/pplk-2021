<?php

namespace App\Http\Controllers;

use App\Models\FindCode;
use Illuminate\Http\Request;

class findcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.game.find_codes.create');
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
     * @param  \App\Models\FindCode  $findCode
     * @return \Illuminate\Http\Response
     */
    public function show(FindCode $findCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FindCode  $findCode
     * @return \Illuminate\Http\Response
     */
    public function edit(FindCode $findCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FindCode  $findCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FindCode $findCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FindCode  $findCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(FindCode $findCode)
    {
        //
    }
}
