<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaAcaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $image = 'evident/';
        return [
            'status_id' => mt_rand(1, 3),
            'user_id' => 3,
            'mitra_id' => mt_rand(1, 3),
            'sto_id' => mt_rand(1, 3),
            'cust_wo' => $this->faker->unique()->randomNumber(8, true),
            'cust_name' => $this->faker->name(),
            'cust_email' => $this->faker->unique()->safeEmail(),
            'cust_address' => $this->faker->address(),
            'cust_phone' => $this->faker->phoneNumber(),
            'cust_inet' => $this->faker->unique()->randomNumber(9, true),
            'cust_service' => '2P [Inet+Voice]',
            'image_depan_odp' => $image . 'image_depan_odp.jpg',
            'image_dalam_odp' => $image . 'image_dalam_odp.jpg',
            'image_label_dc' => $image . 'image_label_dc.jpg',
            'image_redaman' => $image . 'image_redaman.jpg',
            'image_ont' => $image . 'image_ont.jpg',
            'image_stb' => $image . 'image_stb.jpg',
            'image_teknisi_pelanggan' => $image . 'image_teknisi_pelanggan.jpg',
            'image_rumah_pelanggan' => $image . 'image_rumah_pelanggan.jpeg',

        ];
    }
}
