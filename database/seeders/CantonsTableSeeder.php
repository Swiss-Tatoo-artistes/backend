<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Canton;
use Illuminate\Database\Seeder;

class CantonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Canton::insert([

            'image_url' => 'http://localhost/public/images/cantons/zurichBadge.png',
            'image_url' => 'http://localhost/public/images/cantons/juraBadge.png'

        ]);
    }
}
