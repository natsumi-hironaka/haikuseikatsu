<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Haiku;    // add

class HaikusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $haikus = Haiku::all();

        return view('haikus.index', [
            'haikus' => $haikus,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $haiku = new Haiku;

        return view('haikus.create', [
            'haiku' => $haiku,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $haiku = new Haiku;
        $haiku->first = $request->first;
        $haiku->second = $request->second;
        $haiku->third = $request->third;
        $haiku->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $haiku = Haiku::find($id);

        return view('haikus.show', [
            'haiku' => $haiku,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $haiku = Haiku::find($id);

        return view('haikus.edit', [
            'haiku' => $haiku,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $haiku = Haiku::find($id);
        $haiku->first = $request->first;
        $haiku->second = $request->second;
        $haiku->third = $request->third;
        $haiku->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $haiku = Haiku::find($id);
        $haiku->delete();

        return redirect('/');
    }
}
