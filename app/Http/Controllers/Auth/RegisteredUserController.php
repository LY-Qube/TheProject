<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\AccessKey;
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
    public function create(Request $request): View
    {
        $key = AccessKey::where('access_key', $request->access_key)->first();

        if (!$key) {
            abort(403);
        }
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
        // check isset access key
        $key = AccessKey::where('access_key', $request->access_key)->first();

        if (! $key) {
            abort(403);
        }

        // check left of data
        $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'terms' => 'required'
        ]);

        // check if email access key and email form is same
        if ($request->email != $key->email) {
            return back()->withErrors(['email' => __('auth/register.email_error')])
                ->withInput();
        }

        // create user information
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'job_position' => $key->job_position,
            'creator_id' => $key->user_id
        ]);

        // create personal information
        $user->personal()->create([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name
        ]);

        // create empty social Network
        $user->socialNetwork()->create();

        event(new Registered($user));

        // logged current user
        Auth::login($user);

        // delete access key
        $key->delete();

        // redirect to dashboard
        return redirect(RouteServiceProvider::HOME);
    }
}
