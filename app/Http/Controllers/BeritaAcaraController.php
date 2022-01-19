<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mitra;
use App\Models\StoCabang;
use App\Models\BeritaAcara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaAcaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('beritaacara.index', [
            "title" => "BA Online",
            "baonlines" => BeritaAcara::latest()->get(),
            "mitras" => Mitra::get(),
            "users" => User::get(),
            "stos" => StoCabang::get(),
            "baonline" => BeritaAcara::where('user_id', auth()->user()->id)->latest()->get(),
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
        return view("beritaacara.add", [
            "title" => "BA Online"
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
        $request->validate([
            'cust_wo' => ["required"],
            'cust_name' => ["required", "max:255"],
            'cust_email' => ["required", "max:255", "email:dns"],
            'cust_address' => ["required", "max:255"],
            'cust_phone' => ["required"],
            'cust_inet' => ["required"],
            'image_depan_odp' => ["required", "image", "mimes:jpeg,png,jpg,svg", "max:5120"],
            'image_dalam_odp' => ["required", "image", "mimes:jpeg,png,jpg,svg", "max:5120"],
            'image_label_dc' => ["required", "image", "mimes:jpeg,png,jpg,svg", "max:5120"],
            'image_redaman' => ["required", "image", "mimes:jpeg,png,jpg,svg", "max:5120"],
            'image_ont' => ["required", "image", "mimes:jpeg,png,jpg,svg", "max:5120"],
            'image_stb' => ["required", "image", "mimes:jpeg,png,jpg,svg", "max:5120"],
            'image_teknisi_pelanggan' => ["required", "image", "mimes:jpeg,png,jpg,svg", "max:5120"],
            'image_rumah_pelanggan' => ["required", "image", "mimes:jpeg,png,jpg,svg", "max:5120"]
        ]);

        BeritaAcara::create([
            'status_id' => 2,
            'user_id' => auth()->user()->id,
            'mitra_id' => auth()->user()->mitra_id,
            'sto_id' => auth()->user()->sto_id,
            'cust_wo' => request("cust_wo"),
            'cust_name' => request("cust_name"),
            'cust_email' => request("cust_email"),
            'cust_address' => request("cust_address"),
            'cust_phone' => request("cust_phone"),
            'cust_inet' => request("cust_inet"),
            'cust_service' => request("cust_service"),
            'image_depan_odp' => request()->file("image_depan_odp")->storeAs("evident/", $request->file("image_depan_odp")->getClientOriginalName()),
            'image_dalam_odp' => request()->file("image_dalam_odp")->storeAs("evident/", $request->file("image_dalam_odp")->getClientOriginalName()),
            'image_label_dc' => request()->file("image_label_dc")->storeAs("evident/", $request->file("image_label_dc")->getClientOriginalName()),
            'image_redaman' => request()->file("image_redaman")->storeAs("evident/", $request->file("image_redaman")->getClientOriginalName()),
            'image_ont' => request()->file("image_ont")->storeAs("evident/", $request->file("image_ont")->getClientOriginalName()),
            'image_stb' => request()->file("image_stb")->storeAs("evident/", $request->file("image_stb")->getClientOriginalName()),
            'image_teknisi_pelanggan' => request()->file("image_teknisi_pelanggan")->storeAs("evident/", $request->file("image_teknisi_pelanggan")->getClientOriginalName()),
            'image_rumah_pelanggan' => request()->file("image_rumah_pelanggan")->storeAs("evident/", $request->file("image_rumah_pelanggan")->getClientOriginalName()),
        ]);

        return redirect(route('baonline.index'))->with("message", "BA Digital has been created!");
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
        return view('beritaacara.detail', [
            "title" => "BA Online",
            "baonlines" => BeritaAcara::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
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
    public function update(Request $request, BeritaAcara $beritaAcara)
    {
        // $baonline = BeritaAcara::find($request->id);
        // $request->status_id = 1;
        // $baonline->save();
        // dd($baonline);
        // return redirect()->back()->with("message", "Approve has been success!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
