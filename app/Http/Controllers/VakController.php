<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vak;

class VakController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $vakken = Vak::all();
        return view('classes', compact('vakken'));
    }    

    public function show($name)
    {
        $vak = Vak::where('name', $name)->firstOrFail();    
        return view('posts.show', compact('vak'));
    } 
    

    /**
     * create new vak.
     */
    public function create()
    {   
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        $vak = Vak::create($validated);

        return redirect()->route('posts.create')->with('success', 'Course created successfully')->with('vak', $vak);
    }    
}
