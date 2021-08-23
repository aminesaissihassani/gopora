<?php

namespace App\Http\Controllers;

use App\Models\ESport;
use App\Models\Post;
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
        $this->validate($request, [
            'slug' => 'required|unique:e_sports,slug|max:255',
            'name' => 'required|min:3|max:255'
        ]);

        $esport = new ESport();

        $esport->slug = $request->slug;
        $esport->name = $request->name;

        $esport->save();

        return redirect(route('home'));
        // return redirect(route('esport.show', $request->slug));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ESport  $eSport
     * @return \Illuminate\Http\Response
     */
    public function show(ESport $eSport)
    {
        // dd($eSport->posts);
        return view('esports.show', [
            'esport' => $eSport,
            'posts' => $eSport->posts->sortByDesc('created_at')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ESport  $eSport
     * @return \Illuminate\Http\Response
     */
    public function edit(ESport $eSport)
    {
        return view('esports.edit',[
            'esport' => $eSport
        ]);
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
        $this->validate($request, [
            'name' => 'required|min:3|max:255'
        ]);

        $eSport->name = $request->name;

        $eSport->update();

        return redirect()->route('esport.show', $eSport->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ESport  $eSport
     * @return \Illuminate\Http\Response
     */
    public function destroy(ESport $eSport)
    {
        $eSport->delete();

        return redirect()->route("home")->with('success', 'Team Deleted!');
    }
}
