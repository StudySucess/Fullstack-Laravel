<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['profile']]);
    }

    public function show($name)
    {
        $user = User::where('name', '=', $name)->firstOrFail();
        return view('users.show', compact('user'));
    }

    public function edit()
    {
        $user = auth()->user();
        return view('users.edit');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validated = $request->validate([
            'name' => 'nullable|string|min:5|max:255',
            'email' => 'nullable|email|max:255|unique:users',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        if ($validated['name']) {
            $user->name = $validated['name'];
        }
    
        if ($validated['email']) {
            $user->email = $validated['email'];
        }
    
        if ($validated['password']) {
            $user->password = Hash::make($validated['password']);
        }
        // dd($validated);

        $user->save();

        return redirect()->route('user.edit', $user->name)->with('status', 'Profielgegevens succesvol gewijzigd');
    }

}
