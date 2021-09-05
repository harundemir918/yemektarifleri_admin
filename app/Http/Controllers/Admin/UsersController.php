<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Edit user
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Edit user
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        if (request()->has('avatar')) {
            $user->addMediaFromRequest('avatar')->toMediaCollection('avatars');
        }
        return redirect('users')->with('success','User updated successfully');
    }

    public function delete($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('users')->with('success','Kullanıcı silindi.');
    }
}
