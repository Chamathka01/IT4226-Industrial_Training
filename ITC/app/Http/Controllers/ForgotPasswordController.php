<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class ForgotPasswordController extends Controller
{
     public function sendLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = Register::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('error', 'Email not found');
        }

        // For now (simple version)
        return back()->with('success', 'Password reset link sent');
    }
}
