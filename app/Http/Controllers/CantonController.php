<?php

namespace App\Http\Controllers;

use App\Models\Canton;

class CantonController extends Controller
{


    //Display all the cantons
    public function index($language_translate)
    {
        // Récupérer la langue spécifique à partir de la requête
        $lang = $language_translate;

        // Filtrer les cantons en fonction de la langue spécifique
        $cantons = Canton::with(['cantonTraductions' => function ($query) use ($lang) {
            $query->where('language_translate', $lang);
        }])
            ->get()
            ->map(function ($canton) {
                $cantonArray = $canton->toArray();
                $cantonTraductions = $cantonArray['canton_traductions'][0] ?? null;
                unset($cantonArray['canton_traductions']);
                if ($cantonTraductions) {
                    $cantonArray['language_translate'] = $cantonTraductions['language_translate'];
                    $cantonArray['translated_name'] = $cantonTraductions['name'];
                }
                return $cantonArray;
            });

        return response()->json(['cantons' => $cantons], 200);
    }



     //Display a specific canton
     public function show($language_translate, $name)
     {
         // Récupérer la langue spécifique à partir de la requête
         $lang = $language_translate;
 
         // Filtrer les cantons en fonction de la langue spécifique
         $cantons = Canton::with(['cantonTraductions' => function ($query) use ($lang) {
             $query->where('language_translate', $lang);
         }])
         ->where('name', $name)
             ->get()
             ->map(function ($canton) {
                 $cantonArray = $canton->toArray();
                 $cantonTraductions = $cantonArray['canton_traductions'][0] ?? null;
                 unset($cantonArray['canton_traductions']);
                 if ($cantonTraductions) {
                     $cantonArray['language_translate'] = $cantonTraductions['language_translate'];
                     $cantonArray['translated_name'] = $cantonTraductions['name'];
                 }
                 return $cantonArray;
             });
 
         return response()->json(['cantons' => $cantons], 200);
     }


}
