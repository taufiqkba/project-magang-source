<?php

namespace Database\Seeders;

use App\Models\BeritaAcara;
use App\Models\Mitra;
use App\Models\StoCabang;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(3)->create();
        // StoCabang::factory(10)->create();
        // Mitra::factory(10)->create();
        BeritaAcara::factory(13)->create();
    }
}
