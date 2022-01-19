<?php

namespace App\Http\Controllers;

use App\Models\StoCabang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class StoCabangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sto.index', [
            "title" => "List STO",
            "stos" => StoCabang::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("sto.add", [
            "title" => "List STO"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => ["required", "max:255", "unique:sto_cabangs"],
            "area" => ["required", "max:255"]
        ]);

        StoCabang::create([
            "name" => Str::upper(request("name")),
            "area" => Str::upper(request("area"))
        ]);

        return redirect(route('sto.index'))->with("message", "STO has been added!");
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
    public function destroy(StoCabang $stoCabang)
    {
        //
        $stoCabang->delete();
        return back()->with("message-delete", "STO has been deleted");
    }
}
