<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $kode_barang =['PRD001', 'PRD002', 'PRD003', 'PRD004', 'PRD005',
                            'PRD006', 'PRD007', 'PRD008', 'PRD009', 'PRD010',
                            'PRD011', 'PRD012', 'PRD013', 'PRD014', 'PRD015',
                            'PRD016', 'PRD017', 'PRD018', 'PRD019', 'PRD020'];
            $nama_barang =['Indomie', 'Pocari Sweet', 'Silverqueen','lolipop','mie sedap','kopikap','bengbeng',
                            'Chocolatos','popmie','alpenliebe','whitecoffee','aleale','sarden','komo','madurasa',
                            'citato','Jetz','sonice','fruitea','mrbread'];
            $kategori_barang =['Makanan', 'Minuman', 'Snack', 'Permen','Makanan','Minuman','Snack','Snack','Makanan','Permen',
                                'Minuman','Minuman','Makanan','Snack','Minuman','Snack','Snack','Snack','minuman','Makanan'];
            $harga =['3000', '6000', '12500','2000','3000','1000','1500','3000','7000','500','1500','1000','15000','500',
                    '2000', '2000','1500','2500','7000','10000'];
            $qty =['100', '50', '45','20','50','200','50','50','100','5000','1000','700','500','5000','700','500','200',
                    '40','50','200'];

        for($i=0; $i < 20; $i++){
            DB::table('barangs')->insert([
                //'id_barang'=> $id_barang[$i],
                'kode_barang' => $kode_barang[$i],
                'nama_barang' => $nama_barang[$i],
                'kategori_barang' => $kategori_barang[$i],
                'harga' => $harga[$i],
                'qty' => $qty[$i]
            ]);
            }
        }
}

    