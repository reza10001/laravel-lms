<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;


class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('panel.users.index', compact('users'));
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

  
    public function edit(User $user)
    {
                return view('panel.users.edit', compact('user'));
    }

  
    public function update(Request $request, User $user)
    {
$request->validate([
            'name' => 'required|string|max:50',
            'email' => ['required','string','max:70',Rule::unique('users')->ignore($user->id)],
            'role' => ['required','max:255']
        ]);
 $data = $request->only(['name','email','role']);
       $user->update($data);
       return redirect()->route('users.index');
}

   
    public function destroy(string $id)
    {
        //
    }
}
