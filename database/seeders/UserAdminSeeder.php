<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use App\Models\Stok;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserAdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();
        Admin::create (
            [
            'nama'           => 'arya',
            'level'          => 'superadmin',
            'jenis_kelamin'  => 'Laki-Laki',
            'email'          => 'arya@gmail.com',
            'alamat'         => 'Griya Parung panjang',
            'no_tlpn'        => '081293209055',
            'password'       => bcrypt('superadmin'),
            'remember_token' => Str::random(60),
            ]
        );
        Admin::create (
            [
            'nama'           => 'ucok',
            'level'          => 'admin',
            'jenis_kelamin'  => 'Laki-Laki',
            'email'          => 'ucok@gmail.com',
            'alamat'         => 'Legok Permai',
            'no_tlpn'        => '081234567890',
            'password'       => bcrypt('admin'),
            'remember_token' => Str::random(60),
            ]
        );
        Admin::create (
            [
            'nama'           => 'mei',
            'level'          => 'kasir',
            'jenis_kelamin'  => 'Perempuan',
            'email'          => 'mei@gmail.com',
            'alamat'         => 'Tangerang Barat',
            'no_tlpn'        => '082211334455',
            'password'       => bcrypt('kasir'),
            'remember_token' => Str::random(60),
            ]
        );


        // Kategori::truncate();
        // Kategori::create (
        //     [
        //     'nama'           => 'Dog Food',
        //     ]
        // );
        // Kategori::create (
        //     [
        //     'nama'           => 'Cat Food',
        //     ]
        // );
        

        // $dt = Carbon::now();
        // $dateNow = $dt->toDateTimeString();

        // Stok::truncate();
        // Stok::create (
        //     [
        //     'kode_barang'    => Str::random(20),
        //     'nama'           => 'Sakura',
        //     'jenis'          => 'dog food',
        //     'satuan'         => 'Kg',
        //     'stok'           => '50',
        //     'harga_jual'     => 'Rp 50.000',
        //     'harga_beli'     => 'Rp 100.000',
        //     'deskripsi'      => 'makannan terjangkau untung anjing anda',
        //     'gambar'         => 'ssd',
        //     'expired'        => $dateNow,
        //     ]
        // );

        // Stok::create (
        //     [
        //     'kode_barang'    => Str::random(20),
        //     'nama'           => 'Bottime',
        //     'jenis'          => 'cat food',
        //     'satuan'         => 'Kg',
        //     'stok'           => '50',
        //     'harga_jual'     => 'Rp 40.000',
        //     'harga_beli'     => 'Rp 200.000',
        //     'gambar'         => 'ssd',
        //     'deskripsi'      => 'ini merupakan makanan terbaik untuk kucing',
        //     'expired'        => $dateNow,
        //     ]
        // );
    }
}
