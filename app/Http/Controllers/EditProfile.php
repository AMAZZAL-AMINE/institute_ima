<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EditProfile extends Controller
{
    //get all admin users 
    public function getUsers() {
        $users = User::where("is_admin_lite", "yes")->get();
        return view("admin.users.all_users", compact('users'));
    }

    //edit usrr profiel 
    public function EditUserAdmin($id) {
        $user = User::FindOrFail($id);
        return view("admin.users.edit_admin", compact('user'));
    }

    //store user protfiel
    public function storeUserProfile($id, Request $request) {
        $user = User::findOrFail($id);
        $data = $request->validate(
            [
                "name" => ['required', 'string', 'max:255'],
                "email" => ['required', 'string', 'email', 'max:255'],
                
            ]
        );
        $user->update(
            [
                "name" => $data["name"],
                "email" => $data["email"],
                "password" => Hash::make($request->password)  ?? $user->password,
            ]
        );

        return back()->with(
            [
                "message" => "Profile Has Been Updated Successfuly"
            ]
        );
    }
}
