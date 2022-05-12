<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'prename' => ['required', 'string', 'max:255'],
            // 'datenaiss' => ['required', 'string', 'max:255'],
            // 'numpiece' => ['required', 'string', 'max:255'],
            // 'dateexp' => ['required', 'string', 'max:255'],
            // 'typepiece' => ['required', 'string', 'max:255'],
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'prename' => $request->prename,
            // 'datenaiss' => $request->datenaiss,
            // 'numpiece' => $request->numpiece,
            // 'dateexp' => $request->dateexp,
            // 'typepiece' => $request->typepiece,
            'tel' => $request->tel,
            'password' => Hash::make($request->password),
        ]);

        $role = Role::select('id')->where('name', 'admin')->first();
        $user->roles()->attach($role);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
