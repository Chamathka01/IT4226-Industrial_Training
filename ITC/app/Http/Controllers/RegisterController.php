<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:50',
            'lastname' => 'required|string|max:50',
            'dob' => 'nullable|date',
            'phone' => 'nullable|digits:10',
            'email' => 'required|email|unique:registers,email',
            'username' => 'required|min:4|max:20|unique:registers,username',
            'role' => 'required|in:admin,user',
            'address' => 'nullable|string|max:255',
            'password' => 'required|min:8',
        ]);

        $user = new Register();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->role = $request->role;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        
        $user->save();

        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }
}
