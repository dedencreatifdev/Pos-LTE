<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Handle the login logic here
        return view('auth.login')->with('title', 'Login');
    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {
        // Handle the registration logic here
        // return view('auth.register')->with('title', 'Register');
    }
    public function logout(Request $request)
    {
        // Handle the logout logic here
        // return redirect()->route('login')->with('message', 'Logged out successfully');
    }
    public function forgotPassword(Request $request)
    {
        // Handle the password reset logic here
        // return view('auth.forgot-password')->with('title', 'Forgot Password');
    }
    public function resetPassword(Request $request)
    {
        // Handle the password reset logic here
        // return view('auth.reset-password')->with('title', 'Reset Password');
    }
    public function verifyEmail(Request $request)
    {
        // Handle the email verification logic here
        // return view('auth.verify-email')->with('title', 'Verify Email');
    }
    public function sendVerificationEmail(Request $request)
    {
        // Handle the email verification logic here
        // return redirect()->route('login')->with('message', 'Verification email sent');
    }
}
