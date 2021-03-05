<?php

namespace App\Http\Controllers;

use App\offre;
use Illuminate\Http\Request;

class offreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('admin/offres');
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
        offre::create($request->except(['files']));

        return redirect()->route('Offre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function show($offre)
    {
        $of=offre::find($offre);
        return view('frontoffice.offreDetail',["offre"=>$of]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function edit(offre $offre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$offre)
    {
        $offr=offre::find($offre);
        $offr->update($request->all());
        return redirect()->route('Offre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\offre  $offre
     * @return \Illuminate\Http\Response
     */
    public function destroy(offre $offre)
    {
        //
    }
    function search(Request $request){
        return view('frontoffice.search');
    }

}
