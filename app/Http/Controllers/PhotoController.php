<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $photos;

    public function __construct()
    {
        $this->photos = Photo::all();
        \View::share('photos', $this->photos);
    }

    public function index()
    {
        $photo = new Photo();
        return view('okoboji.index', compact('photo'));
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
        $photo = Photo::create($this->validateRequest());
        $this->storeImage($photo);
        return redirect('okoboji');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Photo $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $photo->update($this->validateRequest());
        $this->storeImage($photo);
        return redirect('okoboji');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect('/okoboji');
    }

    private function validateRequest()
    {
        return request()->validate([
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif',
        ]);
    }

    private function storeImage($photo)
    {
        if (request()->has('image'))
        {
            $photo->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);
        }
    }
}
