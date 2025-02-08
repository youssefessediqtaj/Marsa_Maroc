<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Effectue la connexion
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard'); // Redirige vers le tableau de bord ou une autre page
        }

        return back()->withErrors(['email' => 'Les informations de connexion sont incorrectes.']);
    }

    // Déconnexion
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
