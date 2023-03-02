<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::disableForeignKeyConstraints();
        // Siswa::truncate(); // menghapus/menosongkan seluruh data pada table
        // Schema::enableForeignKeyConstraints();

        // $dataSiswa = [
        //     ['name' => 'Madara', 'gender' => 'L', 'nim' => '0101001', 'class_id' =>1],
        //     ['name' => 'Obito', 'gender' => 'L', 'nim' => '0101002', 'class_id' =>1],
        //     ['name' => 'Izuna', 'gender' => 'L', 'nim' => '0101003', 'class_id' =>2],
        //     ['name' => 'Sasuke', 'gender' => 'L', 'nim' => '0101004', 'class_id' =>2],
        //     ['name' => 'Itachi', 'gender' => 'L', 'nim' => '0101005', 'class_id' =>3],
        //     ['name' => 'Shisui', 'gender' => 'L', 'nim' => '0101006', 'class_id' =>3],
        // ];

        // foreach ($dataSiswa as $value) {
        //     Siswa::insert([
        //         'name' => $value['name'],
        //         'gender' => $value['gender'],
        //         'nim' => $value['nim'],
        //         'class_id' => $value['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now()
        //     ]);
        // }

        // Factory Faker
        Siswa::factory()
            ->count(20)
            ->create();
    }
}