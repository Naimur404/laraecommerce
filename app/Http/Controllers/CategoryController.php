<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
       $categories= Category::all();
       
        return view('backend.categories.index',['categories'=>$categories]);
    }
    public function create(){
        return view('backend.categories.create');
    }
    public function store(Request $request){
        $request->validate([
            'title'=>['required','min:3'],
            'slug'=>['required','min:3'],
        ]);
        Category::create([
            'title'=>$request->title,
            'slug'=>$request->slug
        ]);
        $request->session()->flash('message','task was sucessfully?');
        return redirect()->route('categories.index');

    }
}
