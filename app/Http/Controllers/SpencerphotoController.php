<?php

namespace App\Http\Controllers;

use App\Spencerphoto;
use Illuminate\Http\Request;

class SpencerphotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $spencerphotos;

    public function __construct()
    {
        $this->spencerphotos = Spencerphoto::all();
        \View::share('spencerphotos', $this->spencerphotos);
    }

    public function index()
    {
        $spencerphoto = new Spencerphoto();
        return view('spencer.index', compact('photo'));
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
        $spencerphoto = Spencerphoto::create($this->validateRequest());
        $this->storeImage($spencerphoto);
        return redirect('spencer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Spencerphoto $spencerphoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Spencerphoto $spencerphoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Spencerphoto $spencerphoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spencerphoto $spencerphoto)
    {
        $spencerphoto->update($this->validateRequest());
        $this->storeImage($spencerphoto);
        return redirect('spencer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spencerphoto $spencerphoto)
    {
        $spencerphoto->delete();
        return redirect('/spencer');
    }

    private function validateRequest()
    {
        return request()->validate([
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif',
        ]);
    }

    private function storeImage($spencerphoto)
    {
        if (request()->has('image'))
        {
            $spencerphoto->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }
}
