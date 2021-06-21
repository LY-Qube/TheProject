<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return View
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param Request $request
     * @return RedirectResponse
     *
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'last_name'         => 'required|string|max:255',
            'first_name'        => 'required|string|max:255',
            'job_position'      => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:users',
            'password'          => ['required', 'confirmed', Rules\Password::defaults()],
            'terms'             => 'required'
        ]);

        // add job_position until add access key

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'job_position' => $request->job_position
        ]);

        $user->personal()->create([
            'last_name'     => $request->last_name,
            'first_name'    => $request->first_name
        ]);

        $user->socialNetwork()->create();

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
