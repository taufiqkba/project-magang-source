<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mitra;
use App\Models\StoCabang;
use App\Models\BeritaAcara;
use Illuminate\Http\Request;

class BAController extends Controller
{
    //

    public function approved()
    {
        return view('beritaacara.approved', [
            "title" => "BA Online",
            "baonlines" => BeritaAcara::latest()->get(),
            "mitras" => Mitra::get(),
            "users" => User::get(),
            "stos" => StoCabang::get(),
            "baapprove" => BeritaAcara::where([
                'status_id' => 1,
                "user_id" => auth()->user()->id
            ])->latest()->get()
        ]);
    }

    public function need_approved()
    {
        return view('beritaacara.need-approved', [
            "title" => "BA Online",
            "baonlines" => BeritaAcara::where('status_id', 2)->latest()->get(),
            "mitras" => Mitra::get(),
            "users" => User::get(),
            "stos" => StoCabang::get(),
            "baneedapprove" => BeritaAcara::where([
                'status_id' => 2,
                "user_id" => auth()->user()->id
            ])->latest()->get()
        ]);
    }

    public function rejected()
    {
        return view('beritaacara.rejected', [
            "title" => "BA Online",
            "baonlines" => BeritaAcara::where('status_id', 3)->latest()->get(),
            "mitras" => Mitra::get(),
            "users" => User::get(),
            "stos" => StoCabang::get(),
            "bareject" => BeritaAcara::where([
                'status_id' => 3,
                "user_id" => auth()->user()->id
            ])->latest()->get()
        ]);
    }
}
