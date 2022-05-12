<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Piece;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
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



        return Redirect::route('admin.users.create')->with('message','Les informations de l\'utilisateur ' . $user->name .' ont bien été enregistrées.');
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
        $user->roles()->sync($request->roles);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
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
            'datenaiss' => ['required', 'string', 'max:255'],
            'numpiece' => ['required', 'string', 'max:255'],
            'dateexp' => ['required', 'string', 'max:255'],
            // 'typepiece' => ['required', 'string', 'max:255'],
            'piece_id' => 'required|integer',
            'tel' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|',
            'roles' => 'required'
        ]);
    }



}
