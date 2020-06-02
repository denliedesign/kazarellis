<?php

namespace App\Http\Controllers;

use App\Spencermenu;
use Illuminate\Http\Request;

class SpencermenuController extends Controller
{
    public function __construct()
    {
        $this->spencermenus = Spencermenu::all();
        \View::share('spencermenus', $this->spencermenus);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $spencermenu = new Spencermenu();
        return view('/spencer/spencermenu', compact('spencermenu'));
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
    public function store()
    {
        $spencermenu = Spencermenu::create($this->validateRequest());
        return redirect('/spencer/spencermenu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spencermenu  $spencermenu
     * @return \Illuminate\Http\Response
     */
    public function show(Spencermenu $spencermenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spencermenu  $spencermenu
     * @return \Illuminate\Http\Response
     */
    public function edit(Spencermenu $spencermenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spencermenu  $spencermenu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spencermenu $spencermenu)
    {
        $spencermenu->update($this->validateRequest());
        return redirect('/spencer/spencermenu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spencermenu  $spencermenu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spencermenu $spencermenu)
    {
        $spencermenu->delete();
        return redirect('/spencer/spencermenu');
    }

    private function validateRequest()
    {
        return request()->validate([
            'course' => 'required',
            'item' => 'required',
            'description' => 'required',
        ]);
    }
}
