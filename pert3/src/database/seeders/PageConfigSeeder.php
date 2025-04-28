<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PageConfig::create({
            'title' => 'YOU';
            'detail' => 'The Best I ever had';
            'image' = > ''
        });
    }
}
