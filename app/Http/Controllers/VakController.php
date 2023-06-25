<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vak;

class VakController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $vakken = Vak::all();
        return view('courses.courses', compact('vakken'));
    }    

    public function show($name)
    {
        $vak = Vak::where('name', $name)->firstOrFail();
        return view('courses.show', compact('vak'));
    } 
    
    public function create()
    {   
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required'
        ]);

        $vak = Vak::create($validated);

        return redirect()->route('posts.create')->with('success', 'Course created successfully')->with('vak', $vak);
    }    
}
