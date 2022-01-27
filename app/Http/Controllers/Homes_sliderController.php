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
        return view('sliders.index', compact('sliders'));
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
    public function show(Home_slider $slider)
    {
        return view('sliders.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home_slider  $home_slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $slider = Home_slider::where('id', $id)->first();
        return view('sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home_slider  $home_slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $slider = Home_slider::where('id', $id)->first();
        if ($request->image == "") {
            $image = $slider->image;
        } else {
            $image = $request->image;
        }
        
        $slider->update(

            [
                'image' => $image,
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'price' => $request->price,
                'link' => $request->link,
                'status' => $request->status,


            ]
        );

        return redirect()->route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home_slider  $home_slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

    {
        Home_slider::where('id', $id)->delete();

        return redirect()->route('sliders.index');
    }
}
