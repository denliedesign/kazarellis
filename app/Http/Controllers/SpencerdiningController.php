<?php

namespace App\Http\Controllers;

use App\Spencerdining;
use Illuminate\Http\Request;

class SpencerdiningController extends Controller
{
    public function __construct()
    {
        $this->spencerdinings = Spencerdining::all();
        \View::share('spencerdinings', $this->spencerdinings);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spencerdinings = Spencerdining::all();
        return view('spencerdinings', compact('spencerdinings'));
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
        $spencerdining = Spencerdining::create($this->validateRequest());
        return redirect('spencerdinings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Spencerdining  $spencerdining
     * @return \Illuminate\Http\Response
     */
    public function show(spencerdining $spencerdining)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Spencerdining  $spencerdining
     * @return \Illuminate\Http\Response
     */
    public function edit(spencerdining $spencerdining)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Spencerdining  $spencerdining
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, spencerdining $spencerdining)
    {
        $spencerdining->update($this->validateRequest());
        return redirect('spencer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Spencerdining  $spencerdining
     * @return \Illuminate\Http\Response
     */
    public function destroy(spencerdining $spencerdining)
    {

    }

    private function validateRequest()
    {
        return request()->validate([
            'hours' => 'required',
        ]);
    }


}
