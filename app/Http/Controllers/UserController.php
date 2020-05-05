<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            if (Gate::allows('manage-users')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = \App\User::paginate(10);

        $roles = $request->get('roles');

        if ($roles) {
            $users = \App\User::where('roles', $roles)->paginate(10);
        } else {
            $users = \App\User::paginate(10);
        }


        $filterKeyword = $request->get('keyword');

        if ($filterKeyword) {
            if ($roles) {
                $users = \App\User::where('email', 'LIKE', "%$filterKeyword%")
                    ->where('roles', $roles)
                    ->paginate(10);
            } else {
                $users = \App\User::where('email', 'LIKE', "%$filterKeyword%")
                    ->paginate(10);
            }
        }

        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            'name' => 'required|min:5',
            'username' => 'required|min:5|max:20',
            'roles' => 'required',
            'no_telp' => 'required',
            'password' => 'required',
            'email' => 'required',
            'password_confirmation' => 'required|same:password'
        ])->validate();

        $new_user = new \App\User;
        $new_user->name = $request->get('name');
        $new_user->username = $request->get('username');
        $arrayTostring = implode(',', $request->input('roles'));
        $new_user['roles'] = $arrayTostring;
        $new_user->no_telp = $request->get('no_telp');
        $new_user->email = $request->get('email');
        $new_user->password = Hash::make($request->get('password'));

        $new_user->save();
        return redirect()->route('users.create')->with('status', 'User successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = \App\User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $user = \App\User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \Validator::make($request->all(), [
            "name" => "required|min:5|max:100",
            "roles" => "required",
            "no_telp" => "required",
        ])->validate();

        $user = \App\User::findOrFail($id);
        $user->name = $request->get('name');
        $arrayTostring = implode(',', $request->input('roles'));
        $new_user['roles'] = $arrayTostring;
        $user->username = $request->get('username');
        $user->email = $request->get('email');
        $user->no_telp = $request->get('no_telp');

        $user->save();

        return redirect()->route('users.edit', [$id])->with('status', 'User succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = \App\User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('status', 'User successfully delete');
    }
}
