<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ProtoneMedia\Splade\Facades\Toast;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:5|max:100',
            'email' => 'required|unique:users,email|email:rfc,dns',
            'password' => 'required|string|confirmed|min:8|max:100',
        ]);

        if(User::create($validated)) {
            Toast::title('Konto zostało utworzone!')
            ->message('Możesz się teraz zalogować')
            ->autoDismiss(10);

            return redirect()->route('loginForm');
        } 
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)) {
            Toast::title('Witaj '. Auth::user()->name .'!')
            ->autoDismiss(10);
            return redirect()->route('home');
        }

        return back()->withErrors(['email'=>'Nieprawidłowy login lub hasło'])->withInput($request->only('email'));
    }
}
