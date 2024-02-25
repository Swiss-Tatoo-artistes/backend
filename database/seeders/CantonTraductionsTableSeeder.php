<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\CantonTraduction;
use Illuminate\Database\Seeder;

class CantonTraductionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertion des traductions des cantons
        CantonTraduction::insert([

            // Aargau
            ['canton_id' => 1, 'language_translate' => 'fr', 'name' => 'Argovie'],
            ['canton_id' => 1, 'language_translate' => 'it', 'name' => 'Argovia'],
            ['canton_id' => 1, 'language_translate' => 'de', 'name' => 'Aargau'],
            ['canton_id' => 1, 'language_translate' => 'en', 'name' => 'Aargau'],

            // Appenzell
            ['canton_id' => 2, 'language_translate' => 'fr', 'name' => 'Appenzell'],
            ['canton_id' => 2, 'language_translate' => 'it', 'name' => 'Appenzello'],
            ['canton_id' => 2, 'language_translate' => 'de', 'name' => 'Appenzell'],
            ['canton_id' => 2, 'language_translate' => 'en', 'name' => 'Appenzell'],

            // Basel
            ['canton_id' => 3, 'language_translate' => 'fr', 'name' => 'Bâle'],
            ['canton_id' => 3, 'language_translate' => 'it', 'name' => 'Basilea'],
            ['canton_id' => 3, 'language_translate' => 'de', 'name' => 'Basel'],
            ['canton_id' => 3, 'language_translate' => 'en', 'name' => 'Basel'],

            // Bern
            ['canton_id' => 4, 'language_translate' => 'fr', 'name' => 'Berne'],
            ['canton_id' => 4, 'language_translate' => 'it', 'name' => 'Berna'],
            ['canton_id' => 4, 'language_translate' => 'de', 'name' => 'Bern'],
            ['canton_id' => 4, 'language_translate' => 'en', 'name' => 'Bern'],

            // Fribourg
            ['canton_id' => 5, 'language_translate' => 'fr', 'name' => 'Fribourg'],
            ['canton_id' => 5, 'language_translate' => 'it', 'name' => 'Friburgo'],
            ['canton_id' => 5, 'language_translate' => 'de', 'name' => 'Freiburg'],
            ['canton_id' => 5, 'language_translate' => 'en', 'name' => 'Fribourg'],

            // Geneva
            ['canton_id' => 6, 'language_translate' => 'fr', 'name' => 'Genève'],
            ['canton_id' => 6, 'language_translate' => 'it', 'name' => 'Ginevra'],
            ['canton_id' => 6, 'language_translate' => 'de', 'name' => 'Genf'],
            ['canton_id' => 6, 'language_translate' => 'en', 'name' => 'Geneva'],

            // Glarus
            ['canton_id' => 7, 'language_translate' => 'fr', 'name' => 'Glaris'],
            ['canton_id' => 7, 'language_translate' => 'it', 'name' => 'Glarona'],
            ['canton_id' => 7, 'language_translate' => 'de', 'name' => 'Glarus'],
            ['canton_id' => 7, 'language_translate' => 'en', 'name' => 'Glarus'],

            // Graubünden
            ['canton_id' => 8, 'language_translate' => 'fr', 'name' => 'Grisons'],
            ['canton_id' => 8, 'language_translate' => 'it', 'name' => 'Grigioni'],
            ['canton_id' => 8, 'language_translate' => 'de', 'name' => 'Graubünden'],
            ['canton_id' => 8, 'language_translate' => 'en', 'name' => 'Graubünden'],

            // Jura
            ['canton_id' => 9, 'language_translate' => 'fr', 'name' => 'Jura'],
            ['canton_id' => 9, 'language_translate' => 'it', 'name' => 'Giura'],
            ['canton_id' => 9, 'language_translate' => 'de', 'name' => 'Jura'],
            ['canton_id' => 9, 'language_translate' => 'en', 'name' => 'Jura'],

            // Lucerne
            ['canton_id' => 10, 'language_translate' => 'fr', 'name' => 'Lucerne'],
            ['canton_id' => 10, 'language_translate' => 'it', 'name' => 'Lucerna'],
            ['canton_id' => 10, 'language_translate' => 'de', 'name' => 'Luzern'],
            ['canton_id' => 10, 'language_translate' => 'en', 'name' => 'Lucerne'],

            // Neuchâtel
            ['canton_id' => 11, 'language_translate' => 'fr', 'name' => 'Neuchâtel'],
            ['canton_id' => 11, 'language_translate' => 'it', 'name' => 'Neuchâtel'],
            ['canton_id' => 11, 'language_translate' => 'de', 'name' => 'Neuenburg'],
            ['canton_id' => 11, 'language_translate' => 'en', 'name' => 'Neuchâtel'],

            // Nidwalden
            ['canton_id' => 12, 'language_translate' => 'fr', 'name' => 'Nidwald'],
            ['canton_id' => 12, 'language_translate' => 'it', 'name' => 'Nidvaldo'],
            ['canton_id' => 12, 'language_translate' => 'de', 'name' => 'Nidwalden'],
            ['canton_id' => 12, 'language_translate' => 'en', 'name' => 'Nidwalden'],

            // Obwalden
            ['canton_id' => 13, 'language_translate' => 'fr', 'name' => 'Obwald'],
            ['canton_id' => 13, 'language_translate' => 'it', 'name' => 'Obvaldo'],
            ['canton_id' => 13, 'language_translate' => 'de', 'name' => 'Obwalden'],
            ['canton_id' => 13, 'language_translate' => 'en', 'name' => 'Obwalden'],

            // St. Gallen
            ['canton_id' => 14, 'language_translate' => 'fr', 'name' => 'Saint-Gall'],
            ['canton_id' => 14, 'language_translate' => 'it', 'name' => 'San Gallo'],
            ['canton_id' => 14, 'language_translate' => 'de', 'name' => 'St. Gallen'],
            ['canton_id' => 14, 'language_translate' => 'en', 'name' => 'St. Gallen'],

            // Schaffhausen
            ['canton_id' => 15, 'language_translate' => 'fr', 'name' => 'Schaffhouse'],
            ['canton_id' => 15, 'language_translate' => 'it', 'name' => 'Sciaffusa'],
            ['canton_id' => 15, 'language_translate' => 'de', 'name' => 'Schaffhausen'],
            ['canton_id' => 15, 'language_translate' => 'en', 'name' => 'Schaffhausen'],

            // Schwyz
            ['canton_id' => 16, 'language_translate' => 'fr', 'name' => 'Schwytz'],
            ['canton_id' => 16, 'language_translate' => 'it', 'name' => 'Svitto'],
            ['canton_id' => 16, 'language_translate' => 'de', 'name' => 'Schwyz'],
            ['canton_id' => 16, 'language_translate' => 'en', 'name' => 'Schwyz'],

            // Solothurn
            ['canton_id' => 17, 'language_translate' => 'fr', 'name' => 'Soleure'],
            ['canton_id' => 17, 'language_translate' => 'it', 'name' => 'Soletta'],
            ['canton_id' => 17, 'language_translate' => 'de', 'name' => 'Solothurn'],
            ['canton_id' => 17, 'language_translate' => 'en', 'name' => 'Solothurn'],

            // Ticino
            ['canton_id' => 18, 'language_translate' => 'fr', 'name' => 'Tessin'],
            ['canton_id' => 18, 'language_translate' => 'it', 'name' => 'Ticino'],
            ['canton_id' => 18, 'language_translate' => 'de', 'name' => 'Tessin'],
            ['canton_id' => 18, 'language_translate' => 'en', 'name' => 'Ticino'],

            // Thurgau
            ['canton_id' => 19, 'language_translate' => 'fr', 'name' => 'Thurgovie'],
            ['canton_id' => 19, 'language_translate' => 'it', 'name' => 'Turgovia'],
            ['canton_id' => 19, 'language_translate' => 'de', 'name' => 'Thurgau'],
            ['canton_id' => 19, 'language_translate' => 'en', 'name' => 'Thurgau'],

            // Uri
            ['canton_id' => 20, 'language_translate' => 'fr', 'name' => 'Uri'],
            ['canton_id' => 20, 'language_translate' => 'it', 'name' => 'Uri'],
            ['canton_id' => 20, 'language_translate' => 'de', 'name' => 'Uri'],
            ['canton_id' => 20, 'language_translate' => 'en', 'name' => 'Uri'],

            // Vaud
            ['canton_id' => 21, 'language_translate' => 'fr', 'name' => 'Vaud'],
            ['canton_id' => 21, 'language_translate' => 'it', 'name' => 'Vaud'],
            ['canton_id' => 21, 'language_translate' => 'de', 'name' => 'Waadt'],
            ['canton_id' => 21, 'language_translate' => 'en', 'name' => 'Vaud'],

            // Valais
            ['canton_id' => 22, 'language_translate' => 'fr', 'name' => 'Valais'],
            ['canton_id' => 22, 'language_translate' => 'it', 'name' => 'Vallese'],
            ['canton_id' => 22, 'language_translate' => 'de', 'name' => 'Wallis'],
            ['canton_id' => 22, 'language_translate' => 'en', 'name' => 'Valais'],

            // Zug
            ['canton_id' => 23, 'language_translate' => 'fr', 'name' => 'Zoug'],
            ['canton_id' => 23, 'language_translate' => 'it', 'name' => 'Zugo'],
            ['canton_id' => 23, 'language_translate' => 'de', 'name' => 'Zug'],
            ['canton_id' => 23, 'language_translate' => 'en', 'name' => 'Zug'],

            // Zürich
            ['canton_id' => 24, 'language_translate' => 'fr', 'name' => 'Zurich'],
            ['canton_id' => 24, 'language_translate' => 'it', 'name' => 'Zurigo'],
            ['canton_id' => 24, 'language_translate' => 'de', 'name' => 'Zürich'],
            ['canton_id' => 24, 'language_translate' => 'en', 'name' => 'Zürich'],


        ]);
    }
}
