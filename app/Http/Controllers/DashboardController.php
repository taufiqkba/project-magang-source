<?php

namespace App\Http\Controllers;

use App\Models\BeritaAcara;
use App\Models\Mitra;
use App\Models\StoCabang;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        return view("dashboard.index", [
            'title' => 'Dashboard',
            'page' => 'dashboard',
            'users' => User::all(),
            // 'user' => User::where('id', auth()->user()->id),
            'mitras' => Mitra::all(),
            "stos" => StoCabang::all(),

            "baonlines" => BeritaAcara::get(),
            "baonline" => BeritaAcara::where('user_id', auth()->user()->id)->get(),
            "baapproves" => BeritaAcara::where([
                'status_id' => 1
            ]),
            "baneedapproves" => BeritaAcara::where([
                'status_id' => 2
            ]),
            "barejects" => BeritaAcara::where([
                'status_id' => 3
            ]),




            "baapprove" => BeritaAcara::where([
                'status_id' => 1,
                "user_id" => auth()->user()->id
            ]),
            "baneedapprove" => BeritaAcara::where([
                'status_id' => 2,
                "user_id" => auth()->user()->id
            ]),
            "bareject" => BeritaAcara::where([
                'status_id' => 3,
                "user_id" => auth()->user()->id
            ]),
        ]);
    }
}
