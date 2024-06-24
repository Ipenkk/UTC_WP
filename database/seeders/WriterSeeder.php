<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Writer::create([
            'logo' => '/img/logo.jpg',
            'name' => 'Raka Putra Wicaksono',
            'description' => 'Spesialis Interactive Multimedia'
        ]);
        Writer::create([
            'logo' => '/img/logo.jpg',
            'name' => 'Bia Mecca Annisa',
            'description' => 'Spesialis Data Science'
        ]);
        Writer::create([
            'logo' => '/img/logo.jpg',
            'name' => 'Abi Firmansyah',
            'description' => 'Spesialis Network Security'
        ]);
    }
}
