<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{

    public function index()
    {
        return view('panel.users.index');
    }

 
    public function create()
    {
        return view('panel.users.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50',
            'email' => 'required|string|max:70|unique:users',
            'role' => 'required|max:255'
        ]);
        $data = $request->only(['name','email','role']);
        $data['password'] = Hash::make('password');
        User::create($data);
        return redirect()->route('users.index');
    }

  
    public function edit(string $id)
    {
        //
    }

  
    public function update(Request $request, string $id)
    {
        //
    }

   
    public function destroy(string $id)
    {
        //
    }
}
