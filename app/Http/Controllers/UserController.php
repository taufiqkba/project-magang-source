<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\StoCabang;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Swift_IdGenerator;
use \Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("user.index", [
            "title" => "List Users",
            "users" => User::latest()->get(),
            "mitras" => Mitra::get(),
            "stos" => StoCabang::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.add", [
            "title" => "List Users",
            "mitras" => Mitra::get(),
            "stos" => StoCabang::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function generateUniqueCode()
    {
        do {
            $user_id = random_int(100000, 199999);
        } while (User::where("user_id", "=", $user_id)->first());

        return $user_id;
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "name" => ["required", "max:255"],
            "email" => ["required", "email:dns", "unique:users"],
            "is_admin" => ["required"],
            "mitra_id" => ["required"],
            "sto_id" => ["required"],
            "password" => ["required", "min:8", "confirmed"]
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create([
            "name" => request("name"),
            "email" => request("email"),
            // "user_id" => IdGenerator::generate(['table' => 'users', 'length' => 8, 'prefix' => 'TL']),
            "user_id" => $this->generateUniqueCode(),
            "password" => $validateData['password'],
            "is_admin" => request("is_admin"),
            "mitra_id" => request("mitra_id"),
            "sto_id" => request("sto_id")
        ]);

        return redirect(route('user.index'))->with("message", "New user has been created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with("message-delete", "User has been deleted!");
    }
}
