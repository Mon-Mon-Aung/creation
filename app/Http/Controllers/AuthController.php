<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showRegister(){
        return view('auth.register');
    }

    public function showLogin() {
        return view('auth.login');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        try {
           $user = User::create($validated);
            Auth::login($user);
            return redirect()
                ->route('ninjas.index')
                ->with('success', 'Ninja registered successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to register ninja.');
        }

    }

    public function login(Request $request) {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if( Auth::attempt($validated)){
            $request->session()->regenerate();
            return redirect()->route('ninjas.index');
        }

        throw ValidationException::withMessages([
            'crenditials' => 'Sorry, incorrect credentials'
        ]);

    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('show.login');
    }
}
