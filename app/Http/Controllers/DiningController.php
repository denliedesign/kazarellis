<?php

namespace App\Http\Controllers;

use App\Dining;
use Illuminate\Http\Request;

class DiningController extends Controller
{
    public function __construct()
    {
        $this->dinings = Dining::all();
        \View::share('dinings', $this->dinings);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dinings = Dining::all();
        return view('dinings', compact('dinings'));
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
        $dining = Dining::create($this->validateRequest());
        return redirect('dinings');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dining  $dining
     * @return \Illuminate\Http\Response
     */
    public function show(Dining $dining)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dining  $dining
     * @return \Illuminate\Http\Response
     */
    public function edit(Dining $dining)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dining  $dining
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dining $dining)
    {
        $dining->update($this->validateRequest());
        return redirect('okoboji');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dining  $dining
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dining $dining)
    {

    }

    private function validateRequest()
    {
        return request()->validate([
            'hours' => 'required',
        ]);
    }


}
