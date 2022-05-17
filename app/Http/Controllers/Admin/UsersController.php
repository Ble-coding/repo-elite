<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Role;
use App\Models\User;
use App\Models\Piece;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Redirect;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $partSups = User::onlyTrashed()->get();
        return view('admin.users.index', compact('users','partSups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        $roles = Role::all();
        $pieces = Piece::all();
        

        return view('admin.users.create', compact('user', 'roles', 'pieces'
    ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($this->validator());
        // $user = User::where('id')->with('roles')->first();

        
        $user->roles()->sync($request->input('roles'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // $user->password = $request->input('password');
        $user->password= Hash::make($request->input('password'));
        $user->prename = $request->input('prename');
        $user->tel = $request->input('tel');
  


$user->save();


 
        return Redirect::route('admin.users.index')->with('message','Les informations de l\'utilisateur ' . $user->name .' ont bien été enregistrées.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (Gate::denies('edit-users')){
            return redirect()->route('admin.users.index');
        }
        $roles = Role::all();
        return view('admin.users.show', compact('user','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Gate::denies('edit-users')){
            return redirect()->route('admin.users.index');
        }
        $pieces = Piece::all();     
        $roles = Role::all();
        return view('admin.users.edit',compact('user','roles','pieces'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

 
        
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Votre mot de passe actuel ne correspond pas au mot de passe que vous avez fourni. Veuillez réessayer");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Le nouveau mot de passe ne peut pas être le même que votre mot de passe actuel. Veuillez choisir un autre mot de passe.");
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->roles()->sync($request->roles);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // $user->password = $request->input('password');
        // $user->password = Hash::make($request->input('password'));
        $user->prename = $request->input('prename');
        $user->tel = $request->input('tel'); 
$user->save();

        return redirect()->route('admin.users.index')->with('message','Les informations de l\'utilisateur ' . $user->name .' ont bien été modifiées.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Gate::denies('delete-users')){
            return redirect()->route('admin.users.index');
        }

        // $user->roles()->detach();
        $user->delete();
        return redirect()->route('admin.users.index')->with('message','Les informations de l\'utilisateur ' . $user->name .' ont bien été supprimées.');
    }
    
    public function restore(User $user)
    {
        if (Gate::denies('delete-users')){
            return redirect()->route('admin.users.index');
        }

        $partSups = User::onlyTrashed()->first();
        // $partSups->roles()->attach();
        $partSups->restore();

        return redirect()->route('admin.users.index')->with('message','Les informations de l\'utilisateur ' . $user->name .' ont bien été restaurées.');
    }
    private function validator(){

        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'prename' => ['required', 'string', 'max:255'],
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
           
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'roles' => 'required'
        ]);
    }



}
