<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Builder\Use_;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // return $users;
        return view('users.index', compact('users'));
    }
 
    public function create()
    {
        return view('create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'carrera' => 'required'
        ]);
        
        User::create($request->post());
 
        return redirect()->route('users.index')->with('success','Usuario has been created successfully.');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
    // public function show(User $user)
    // {
    //     return view('show',compact('users'));
    // }
 
  

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function actualizar(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->actualizar($request->all());

        return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente');
    }
    // public function edit(User $user)
    // {
    //     return view('users.edit',compact('users'));
    // }
 
  
    
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'carrera' => 'required',
            'Ncontrol' => 'required',
            'telefono' => 'required|string|max:15|numeric',
        ]);
        
        $user->fill($request->post())->save();
 
        return redirect()->route('users.index');
    }
 
  
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}

