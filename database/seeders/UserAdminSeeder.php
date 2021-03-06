<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Report;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UserAdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('genders')->insert([
            'gender' => 'Laki-Laki',
        ]);
        DB::table('genders')->insert([
            'gender' => 'Perempuan',
        ]);


        DB::table('status')->insert([
            'status' => 'Tersedia',
        ]);
        DB::table('status')->insert([
            'status' => 'Terisi',
        ]);

        
        DB::table('banks')->insert([
            'bank'        => 'CIMB Niaga',
            'no_rekening' => '705586972100 ',
        ]);
        DB::table('banks')->insert([
            'bank'        => 'BRI',
            'no_rekening' => '106100247000037',
        ]);


        DB::table('jenis_pesanans')->insert([
            'jenis_pesanan' => 'Barang',
        ]);
        DB::table('jenis_pesanans')->insert([
            'jenis_pesanan' => 'Titipan',
        ]);


        DB::table('pets')->insert([
            'pet' => 'Anjing',
        ]);
        DB::table('pets')->insert([
            'pet' => 'Kucing',
        ]);


        DB::table('sizes')->insert([
            'size'      => 'Kecil',
            'harga'     => '5000',
        ]);
        DB::table('sizes')->insert([
            'size'      => 'Sedang',
            'harga'     => '10000',
        ]);
        DB::table('sizes')->insert([
            'size'      => 'Besar',
            'harga'     => '15000',
        ]);


        DB::table('levels')->insert([
            'level' => 'Superadmin',
        ]);
        DB::table('levels')->insert([
            'level' => 'Admin',
        ]);
        DB::table('levels')->insert([
            'level' => 'Kasir',
        ]);
        // ---------------------------
        DB::table('levels')->insert([
            'level' => 'Customer',
        ]);


        DB::table('kategoris')->insert([
            'kategori' => 'Dog Food',
        ]);
        DB::table('kategoris')->insert([
            'kategori' => 'Cat Food',
        ]);
        DB::table('kategoris')->insert([
            'kategori' => 'Aksesoris',
        ]);

        
        DB::table('satuans')->insert([
            'satuan' => 'Kg',
        ]);
        DB::table('satuans')->insert([
            'satuan' => 'Pack',
        ]);
        DB::table('satuans')->insert([
            'satuan' => 'Sack',
        ]);


        DB::table('paystats')->insert([
            'paystat' => 'Paid',
        ]);
        DB::table('paystats')->insert([
            'paystat' => 'Unpaid',
        ]);
        DB::table('paystats')->insert([
            'paystat' => 'Canceled',
        ]);


        // Admin::truncate();
        // Admin::create (
        //     [
        //     'kode_admin'     => 'adm-001',
        //     'nama_admin'     => 'arya',
        //     'level_id'       => '1',
        //     'gender_id'      => '1',
        //     'email'          => 'arya@gmail.com',
        //     'alamat'         => 'Griya Parung panjang',
        //     'no_tlpn'        => '081293209055',
        //     'password'       => bcrypt('superadmin'),
        //     'remember_token' => Str::random(60),
        //     ]
        // );
        Admin::create (
            [
            'kode_admin'     => 'adm-002',
            'nama_admin'     => 'ucok',
            'level_id'       => '2',
            'gender_id'      => '1',
            'email'          => 'ucok@gmail.com',
            'alamat'         => 'Legok Permai',
            'no_tlpn'        => '081234567890',
            'password'       => bcrypt('admin'),
            'remember_token' => Str::random(60),
            ]
        );
        Admin::create (
            [
            'kode_admin'     => 'adm-003',
            'nama_admin'     => 'mei',
            'level_id'       => '3',
            'gender_id'      => '2',
            'email'          => 'mei@gmail.com',
            'alamat'         => 'Tangerang Barat',
            'no_tlpn'        => '082211334455',
            'password'       => bcrypt('kasir'),
            'remember_token' => Str::random(60),
            ]
        );


        // User::truncate();
        User::create (
            [
            'kode_user'      => 'usr-001',
            'nama_user'      => 'Arya Yudha Reynardo',
            'level_id'       => '1',
            'gender_id'      => '1',
            'email'          => 'arya@gmail.com',
            'alamat'         => 'Griya Parung panjang',
            'no_tlpn'        => '081293209055',
            'password'       => bcrypt('superadmin'),
            'remember_token' => Str::random(60),
            ]
        );
        User::create (
            [
            'kode_user'      => 'usr-002',
            'nama_user'      => 'Gracia Gerung',
            'level_id'       => '4',
            'gender_id'      => '2',
            'email'          => 'cia@gmail.com',
            'alamat'         => 'Bekasi',
            'no_tlpn'        => '081122334455',
            'password'       => bcrypt('cia123123'),
            'remember_token' => Str::random(60),
            ]
        );
        User::create (
            [
            'kode_user'      => 'usr-003',
            'nama_user'      => 'mel',
            'level_id'       => '2',
            'gender_id'      => '2',
            'email'          => 'mel@gmail.com',
            'alamat'         => 'Legok Permai',
            'no_tlpn'        => '081234567890',
            'password'       => bcrypt('mel2'),
            'remember_token' => Str::random(60),
            ]
        );
        

        
        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();
        // Stok::truncate();

        DB::table('products')->insert([
            'kategori_id' => '1',
            'satuan_id'   => '1',
            'kode_barang' => 'KB-001',
            'nama_barang' => 'Sakura',
            // 'stok'        => '10',
            'harga_jual'  => '110000',
            'harga_beli'  => '100000',
            'deskripsi'   => 'makannan terjangkau untung anjing anda',
            'gambar'      => 'ssd',
            'expired'     => $dateNow,
        ]);

        DB::table('products')->insert([
            'kategori_id'    => '2',
            'satuan_id'      => '2',
            'kode_barang'    => 'KB-002',
            'nama_barang'    => 'Proplan',
            // 'stok'           => '20',
            'harga_jual'     => '220000',
            'harga_beli'     => '200000',
            'gambar'         => 'ssai',
            'deskripsi'      => 'ini merupakan makanan terbaik untuk kucing',
            'expired'        => $dateNow,
        ]);

        DB::table('products')->insert([
            'kode_barang'    => 'KB-003',
            'kategori_id'    => '3',
            'satuan_id'      => '3',
            'nama_barang'    => 'Bottime',
            // 'stok'           => '30',
            'harga_jual'     => '330000',
            'harga_beli'     => '300000',
            'gambar'         => 'sssat',
            'deskripsi'      => 'ini merupakan makanan terbaik untuk kucing dan anjing',
            'expired'        => $dateNow,
        ]);
        
       
        DB::table('cages')->insert([
            'kode_kandang'   => 'KC-001',
            'nama_kandang'   => '01',
            'size_id'        => '1',
            'harga_id'       => '1',
            'status_id'      => '1',
        ]);

        // DB::table('cages')->insert([
        //     'kode_kandang'   => 'KC-002',
        //     'nama_kandang'   => '02',
        //     'size_id'        => '2',
        //     'harga_id'       => '2',
        //     'status_id'      => '1',
        // ]);

        // DB::table('cages')->insert([
        //     'kode_kandang'   => 'KC-003',
        //     'nama_kandang'   => '03',
        //     'size_id'        => '3',
        //     'harga_id'       => '3',
        //     'status_id'      => '1',
        // ]);

        // DB::table('cages')->insert([
        //     'kode_kandang'   => 'KC-004',
        //     'nama_kandang'   => '04',
        //     'size_id'        => '1',
        //     'harga_id'       => '1',
        //     'status_id'      => '2',
        // ]);

        // DB::insert('insert into carts (id, user_id, produk_id) values (?, ?, ?)', [1, 1, 1]);

        
        // $harga_barang = 110000;      $jumlah_barang = 2;     $total_harga = $harga_barang * $jumlah_barang;    
        // DB::table('carts')->insert([
        //     'user_id'        => '1',
        //     'product_id'     => '3',
        //     'jumlah_barang'  => '1',
        //     'harga_barang'   => '110000',
        //     'total_harga'   => '4',
        // ]);


        // DB::table('checkouts')->insert([
        //     'user_id'       => '1',
        //     'product_id'    => '1',
        //     'jumlah_barang' => '100',
        // ]);


        $dt = Carbon::now();
        $dateNow = $dt->toDateTimeString();
        Report::truncate();

        DB::table('reports')->insert([
            'tanggal'     => $dateNow,
            'nama'        => 'Si Pembeli',
            'jenis'       => 'Pemesanan Barang',
            'jumlah'      => '2',
            'paystat_id'  => '1',
            'total'       => '10000',
        ]);
    }
}
