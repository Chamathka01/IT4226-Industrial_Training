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
            'email' => 'required|unique:registers',
            'username' => 'required|unique:registers',
            'password' => 'required|min:6',
        ]);

        Register::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'email' => $request->email,
            'username' => $request->username,
            'role' => $request->role,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login');
    }
}
