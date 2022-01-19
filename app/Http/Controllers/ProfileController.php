<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    //

    public function edit(User $user)
    {
        return view('profile.edit', [
            "title" => "Edit Profile",
            "user" => $user
        ]);
    }

    public function update(Request $request, User $user)
    {

        $request->validate([
            "name" => ["required", "max:255"],
            "email" => ["required", "email:dns", "unique:users,email," . auth()->user()->id]
        ]);

        Auth::user()->update([
            "name" => request("name"),
            "email" => request("email")
        ]);

        return back()->with("message", "Profile has been changed!");
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            "current_password" => ['required'],
            "password" => ['required', "min:8 ", "confirmed"]
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {

            auth()->user()->update(['password' => Hash::make($request->password)]);

            return back()->with('message', 'Password berhasil diubah!');
        }
        throw ValidationException::withMessages([
            "current_password" => "Wrong password!"
        ]);
    }
}
