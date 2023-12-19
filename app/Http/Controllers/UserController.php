<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{





        public function showLoginForm()
        {
            return view('mannualauth\login');
        }

        public function login(Request $request)
        {

            $request->validate([
                'name' => 'bail|required',
                'email' => 'required|email',
                'email' => 'required|password|max:15|min:8',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                return redirect()->intended('dashboard');
            }

            return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
        }

        public function showRegistrationForm()
        {
            return view('mannualauth\register');
        }

        public function register(Request $request)
        {
            $request->validate([
                'name' => 'bail|required',
                'email' => 'required|email',
                'email' => 'required|password|max:15|min:8',
            ]);

            // Create user
            $user = User::create([
                'name' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            // Log the user in
            Auth::login($user);

            return redirect('dashboard');
        }

        public function logout()
        {
            Auth::logout();

            return redirect('/');
        }
}
