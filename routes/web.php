<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome');
});


// Route pour afficher le formulaire d'inscription
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Route pour envoyer les données du formulaire d'inscription
Route::post('register', [RegisterController::class, 'register']);

// Route pour afficher le formulaire de connexion
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Route pour envoyer les données du formulaire de connexion
Route::post('login', [LoginController::class, 'login']);

// Route pour la déconnexion
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
