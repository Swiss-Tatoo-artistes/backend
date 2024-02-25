<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Traduction;
use Illuminate\Database\Seeder;

class TraductionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertion des traductions des cantons
        Traduction::insert([

            // Aargau
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Argovie'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Argovia'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Aargau'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Aargau'],

            // Appenzell
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Appenzell'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Appenzello'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Appenzell'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Appenzell'],

            // Basel
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Bâle'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Basilea'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Basel'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Basel'],

            // Bern
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Berne'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Berna'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Bern'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Bern'],

            // Fribourg
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Fribourg'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Friburgo'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Freiburg'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Fribourg'],

            // Geneva
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Genève'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Ginevra'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Genf'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Geneva'],

            // Glarus
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Glaris'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Glarona'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Glarus'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Glarus'],

            // Graubünden
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Grisons'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Grigioni'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Graubünden'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Graubünden'],

            // Jura
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Jura'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Giura'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Jura'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Jura'],

            // Lucerne
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Lucerne'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Lucerna'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Luzern'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Lucerne'],

            // Neuchâtel
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Neuchâtel'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Neuchâtel'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Neuenburg'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Neuchâtel'],

            // Nidwalden
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Nidwald'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Nidvaldo'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Nidwalden'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Nidwalden'],

            // Obwalden
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Obwald'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Obvaldo'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Obwalden'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Obwalden'],

            // St. Gallen
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Saint-Gall'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'San Gallo'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'St. Gallen'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'St. Gallen'],

            // Schaffhausen
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Schaffhouse'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Sciaffusa'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Schaffhausen'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Schaffhausen'],

            // Schwyz
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Schwytz'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Svitto'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Schwyz'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Schwyz'],

            // Solothurn
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Soleure'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Soletta'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Solothurn'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Solothurn'],

            // Ticino
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Tessin'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Ticino'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Tessin'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Ticino'],

            // Thurgau
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Thurgovie'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Turgovia'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Thurgau'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Thurgau'],

            // Uri
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Uri'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Uri'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Uri'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Uri'],

            // Vaud
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Vaud'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Vaud'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Waadt'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Vaud'],

            // Valais
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Valais'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Vallese'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Wallis'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Valais'],

            // Zug
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Zoug'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Zugo'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Zug'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Zug'],

            // Zürich
            ['entities' => 'canton', 'language_translate' => 'fr', 'name' => 'Zurich'],
            ['entities' => 'canton', 'language_translate' => 'it', 'name' => 'Zurigo'],
            ['entities' => 'canton', 'language_translate' => 'de', 'name' => 'Zürich'],
            ['entities' => 'canton', 'language_translate' => 'en', 'name' => 'Zürich'],


        ]);
    }
}
