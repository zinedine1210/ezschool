<?php

namespace Database\Seeders;

use App\Models\Kategory;
use App\Models\Product;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'key_user' => "CBA" . 1234567899,
            'username' => "ezschooladmin",
            'nama' => "Zinedine Ziddan Fahdlevy",
            'gender' => "Male",
            'phone' => "089508781380",
            'email' => "ezschool.official@gmail.com",
            'password' => bcrypt("admin123"),
            'isAdmin' => 1
        ]);
        User::create([
            'key_user' => "CBA" . 9876543219,
            'username' => "delaramadani",
            'nama' => "Dela Ramadani",
            'gender' => "Female",
            'phone' => "081290154147",
            'email' => "ziddanfhdlvy12@gmail.com",
            'password' => bcrypt("admin123"),
            'isAdmin' => 0
        ]);

        $data = ['Sepatu', 'Tas', 'Seragam', 'Kaos Kaki', 'Tali Sepatu'];

        foreach ($data as $d) {
            Kategory::create([
                'nama' => $d
            ]);
        }


        Product::create([
            'judul' => "Tas Keren",
            'key_product' => "BRG" . 128982389,
            'harga' => 90000,
            'kondisi' => 'baru',
            'berat' => 9,
            'diskon' => 0,
            'deskripsi' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed illum deleniti minus exercitationem dolorum tempora, officiis molestiae. Quis, adipisci dolores.",
            'informasi' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, pariatur?",
            'kategory_id' => 2
        ]);
    }
}
