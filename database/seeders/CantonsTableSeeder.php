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


            // Aargau
            [
                'image_url' => 'http://localhost/public/images/cantons/aargauBadge.png',
                'name' => 'Aargau'
            ],

            // Appenzell
            [
                'image_url' => 'http://localhost/public/images/cantons/appenzellBadge.png',
                'name' => 'Appenzell'
            ],

            // Basel
            [
                'image_url' => 'http://localhost/public/images/cantons/baselBadge.png',
                'name' => 'Basel'
            ],

            // Bern
            [
                'image_url' => 'http://localhost/public/images/cantons/bernBadge.png',
                'name' => 'Bern'
            ],

            // Fribourg
            [
                'image_url' => 'http://localhost/public/images/cantons/fribourgBadge.png',
                'name' => 'Fribourg'
            ],

            // Geneva
            [
                'image_url' => 'http://localhost/public/images/cantons/genevaBadge.png',
                'name' => 'Geneva'
            ],

            // Glarus
            [
                'image_url' => 'http://localhost/public/images/cantons/glarusBadge.png',
                'name' => 'Glarus'
            ],

            // Graubünden
            [
                'image_url' => 'http://localhost/public/images/cantons/graubündenBadge.png',
                'name' => 'Graubünden'
            ],

            // Jura
            [
                'image_url' => 'http://localhost/public/images/cantons/juraBadge.png',
                'name' => 'Jura'
            ],

            // Lucerne
            [
                'image_url' => 'http://localhost/public/images/cantons/lucerneBadge.png',
                'name' => 'Lucerne'
            ],

            // Neuchâtel
            [
                'image_url' => 'http://localhost/public/images/cantons/neuchatelBadge.png',
                'name' => 'Neuchâtel'
            ],

            // Nidwalden
            [
                'image_url' => 'http://localhost/public/images/cantons/nidwaldenBadge.png',
                'name' => 'Nidwalden'
            ],

            // Obwalden
            [
                'image_url' => 'http://localhost/public/images/cantons/obwaldenBadge.png',
                'name' => 'Obwalden'
            ],

            // St. Gallen
            [
                'image_url' => 'http://localhost/public/images/cantons/stgallenBadge.png',
                'name' => 'St. Gallen'
            ],

            // Schaffhausen
            [
                'image_url' => 'http://localhost/public/images/cantons/schaffhausenBadge.png',
                'name' => 'Schaffhausen'
            ],

            // Schwyz
            [
                'image_url' => 'http://localhost/public/images/cantons/schwyzBadge.png',
                'name' => 'Schwyz'
            ],

            // Solothurn
            [
                'image_url' => 'http://localhost/public/images/cantons/solothurnBadge.png',
                'name' => 'Solothurn'
            ],

            // Ticino
            [
                'image_url' => 'http://localhost/public/images/cantons/ticinoBadge.png',
                'name' => 'Ticino'
            ],

            // Thurgau
            [
                'image_url' => 'http://localhost/public/images/cantons/thurgauBadge.png',
                'name' => 'Thurgau'
            ],

            // Uri
            [
                'image_url' => 'http://localhost/public/images/cantons/uriBadge.png',
                'name' => 'Uri'
            ],

            // Vaud
            [
                'image_url' => 'http://localhost/public/images/cantons/vaudBadge.png',
                'name' => 'Vaud'
            ],

            // Valais
            [
                'image_url' => 'http://localhost/public/images/cantons/valaisBadge.png',
                'name' => 'Valais'
            ],

            // Zug
            [
                'image_url' => 'http://localhost/public/images/cantons/zugBadge.png',
                'name' => 'Zug'
            ],

            // Zürich
            [
                'image_url' => 'http://localhost/public/images/cantons/zurichBadge.png',
                'name' => 'Zürich'
            ],

        ]);
    }
}
