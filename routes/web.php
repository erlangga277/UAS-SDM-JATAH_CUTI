<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Landing page
|--------------------------------------------------------------------------
|  Menampilkan view 'welcome'.
|  (Anda bisa ganti ke Route::view('/', 'landing') kalau nama blade‑nya 'landing.blade.php')
*/
Route::view('/', 'welcome');

/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
Route::get('/login', fn () => redirect('/#login'))->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/admin');   // dashboard Filament
    }

    return redirect('/#login')
        ->withErrors(['email' => 'Email atau password salah.'])
        ->withInput();
});

/*
|--------------------------------------------------------------------------
| Register
|--------------------------------------------------------------------------
*/
Route::get('/register', fn () => redirect('/#register'))->name('register.show');

Route::post('/register', function (Request $request) {

    $data = $request->validate([
        'name'     => ['required', 'string', 'max:255'],
        'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'confirmed', Password::defaults()],
    ]);

    // buat user baru
    $user = User::create([
        'name'     => $data['name'],
        'email'    => $data['email'],
        'password' => Hash::make($data['password']),
    ]);

    // login otomatis
    Auth::login($user);

    // arahkan ke dashboard Filament
    return redirect('/admin');
})->name('register');
