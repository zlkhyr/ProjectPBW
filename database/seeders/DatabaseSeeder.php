<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Zul Akhyar',
            'username' => 'Zlkhyr',
            'email' => 'zakhyar38@gmail.com',
            'password' => bcrypt(235711)
        ]);


        Barang::create([
            'user_id' => 1,
            'barang' => 'buku',
            'foto' => 'path/ke/foto',
            'harga' => '10.000/minggu',
            'stock' => 5
        ]);

        Barang::create([
            'user_id' => 1,
            'barang' => 'kamera',
            'foto' => 'path/ke/foto',
            'harga' => '200.000/minggu',
            'stock' => 3
        ]);
    }
}
