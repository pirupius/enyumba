<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FlyerRequest;
use App\Http\Controllers\Controller;
use App\Http\Utilities\Country;
use App\Flyer;
use App\Photo;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class FlyersController extends Controller
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
        //flash()->overlay('Welcome aboard', 'Thank you for signing up');
        
        return view('flyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlyerRequest $request)
    {
        Flyer::create($request->all());

        flash()->success('Success', 'New listing created successfully!');

        return redirect()->back(); //return back
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($area, $address)
    {
        
        $flyer = Flyer::locatedAt($area, $address);

        return view('flyers.show', compact('flyer'));
    }

    public function addPhoto($area, $address, Request $request){
        $this->validate($request, [
            'photo' => 'required|mimes:jpg,jpeg,png,bmp'
        ]);
        
        $photo = $this->makePhoto($request->file('photo'));

        Flyer::locatedAt($area, $address)->addPhoto($photo);
    }

    public function makePhoto(UploadedFile $file){
        // return Photo::fromForm($file)->store($file);
        return Photo::named($file->getClientOriginalname())->move($file);
    }

    public function allFlyers(Request $request){
        // $listings = Flyer::all(); //gets all results from flyer table
        $listings = Flyer::with('photo')->get();

        return view('flyers.all_flyers', compact('listings'));
        // return $listings;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
