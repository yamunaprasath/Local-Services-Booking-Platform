<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ServicePartner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }

    public function create()
    {
        return view('frontend.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100|min:2',
            'phone' => 'required|digits:10|unique:service_partner,phone',
            'email' => 'required|email|max:150|unique:service_partner,email',
            'password' => 'required|min:6|confirmed',
        ]);

        ServicePartner::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => '5',
        ]);

        return redirect()->back()->with(
            'success',
            'Account created successfully. <a href="' . route('login') . '" class="text-primary">Login</a>'
        );
    }

    public function login(Request $request)
    {
        $request->validate([
            'login'    => 'required|string',
            'password' => 'required|min:6',
        ]);

        $loginField = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $credentials = [
            $loginField  => $request->login,
            'password'   => $request->password,
        ];

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->route('partner.dashboard')
                ->with('success', 'Welcome back, ' . Auth::user()->name . '!');
        }

        return back()->withInput($request->only('login'))->with('error', 'Invalid email/username or password.');
    }

    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }
}
