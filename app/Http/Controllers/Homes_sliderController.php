<?php

namespace App\Http\Controllers;

use App\Models\Home_slider;
use Illuminate\Http\Request;

class Homes_sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Home_slider::all();
        return view('sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      

        return view('sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Home_slider::create($request->all());
        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home_slider  $home_slider
     * @return \Illuminate\Http\Response
     */
    public function show(Home_slider $home_slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home_slider  $home_slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Home_slider $home_slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home_slider  $home_slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home_slider $home_slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home_slider  $home_slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        Home_slider::where('id',$id)->delete();
        dd('sucess');
    }
}
