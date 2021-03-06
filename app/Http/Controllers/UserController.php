<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\EditRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use App\Http\Requests\UserCreateRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(8);
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreRequest $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'username' => 'required',
        //     'email' => 'required|unique:users|email',
        //     'password' => 'required',
        // ]);
        $user = User::create($request->only('name', 'username', 'email')
    +[
        'password' => bcrypt($request->input('password')),
    ]);
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario creado correctamente');
    }

    public function show(User $user)
    {
        // $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(EditRequest $request, User $user)
    {
        // $user=User::findOrFail($id);
        $data = $request->only('name', 'username', 'email');
        $password=$request->input('password');
        if($password)
        $data['password'] = bcrypt($password);
        // if(trim($request->password)=='')
        // {
        //     $data=$request->except('password');
        // }
        // else{
        //     $data=$request->all();
        //     $data['password']=bcrypt($request->password);
        // }
        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'Usuario eliminado correctamente.');
    }
}
