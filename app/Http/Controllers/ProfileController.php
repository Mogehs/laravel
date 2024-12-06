<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;




class ProfileController extends Controller
{
    public function show()
    {
        $services = Services::all();  
        return view('myuserprofile',['title' => 'Admin Profile   | The Home Team','allServices' => $services]);
    }

    public function update(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->id(),
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'country' => 'nullable|string',
            'job' => 'nullable|string',
            'company' => 'nullable|string',
            'about' => 'nullable|string',
        ]);
    
        $user = auth()->user();
        $user->update($validated); // Mass update using validated data

        return back()->with('success', 'Profile updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed', Password::defaults()],
        ]);

        $user = auth()->user();
        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('success', 'Password changed successfully!');
    }
}
