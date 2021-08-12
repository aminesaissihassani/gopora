<?php

namespace App\Http\Controllers;

use App\Models\ESport;
use Illuminate\Http\Request;

class ESportController extends Controller
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
        return view('esports.create');
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
     * @param  \App\Models\ESport  $eSport
     * @return \Illuminate\Http\Response
     */
    public function show(ESport $eSport)
    {
        return view('esports.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ESport  $eSport
     * @return \Illuminate\Http\Response
     */
    public function edit(ESport $eSport)
    {
        return view('esports.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ESport  $eSport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ESport $eSport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ESport  $eSport
     * @return \Illuminate\Http\Response
     */
    public function destroy(ESport $eSport)
    {
        //
    }
}
