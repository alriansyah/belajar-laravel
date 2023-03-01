<?php

namespace Database\Seeders;

use App\Models\ClassRoom;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        ClassRoom::truncate(); // menghapus/menosongkan seluruh data pada table
        Schema::enableForeignKeyConstraints();

        $data = [
            ['nama' => '2A'],
            ['nama' => '2B'],
            ['nama' => '2C'],
            ['nama' => '2D'],
            ['nama' => '2E'],
            ['nama' => '2F'],
        ];

        foreach ($data as $value) {
            ClassRoom::insert([
                'nama' => $value['nama'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
        

        // ClassRoom::insert(
        //     [
        //         [
        //             'nama' => "2A",
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ],
        //         [
        //             'nama' => "2B",
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ],
        //         [
        //             'nama' => "2C",
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ],
        //         [
        //             'nama' => "2D",
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ]
        //     ],
        // );
    }
}