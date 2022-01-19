<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatusController extends Controller
{
    //
    public function status_approve($id)
    {
        $data = DB::table('berita_acaras')->where('id', $id)->first();

        $current_status = $data->status_id;

        if ($current_status == 2) {
            DB::table('berita_acaras')->where('id', $id)->update(['status_id' => 1]);
        }
        // return redirect(route('baonline.index'))->with("message", "BA Digital has been approved!");
        if ($current_status == 2) {
            return redirect(route('ba.needapproved'))->with("message", "BA Digital has been approved!");
        }
    }

    public function status_approve_from_reject($id)
    {
        $data = DB::table('berita_acaras')->where('id', $id)->first();

        $current_status = $data->status_id;

        if ($current_status == 3) {
            DB::table('berita_acaras')->where('id', $id)->update(['status_id' => 1]);
        }
        if ($current_status == 3) {
            return redirect(route('ba.rejected'))->with("message", "BA Digital has been approved!");
        }
    }

    public function status_reject($id)
    {
        $data = DB::table('berita_acaras')->where('id', $id)->first();

        $current_status = $data->status_id;

        if ($current_status == 2) {
            DB::table('berita_acaras')->where('id', $id)->update(['status_id' => 3]);
        }
        if ($current_status == 2) {
            return redirect(route('ba.needapproved'))->with("message-delete", "BA Digital has been rejected!");
        }
    }
}
