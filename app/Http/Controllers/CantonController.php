<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use Illuminate\Http\Request;

class CantonController extends Controller
{


    ///////////////////// ICI REPRENDRE


    //Display all the cantons
    public function index(Request $request)
    {
        // Récupérer la langue spécifique à partir de la requête
        $lang = $request->input('lang', 'fr'); // Par défaut, utilisez 'fr' si la langue n'est pas spécifiée

        // Filtrer les cantons en fonction de la langue spécifique
        $cantons = Canton::with(['cantonTraductions' => function ($query) use ($lang) {
            $query->where('language_translate', $lang);
        }])->get();

        return response()->json(['cantons' => $cantons], 200);
    }








    // Display a specific canton
    public function show($name)
    {

        // Rechercher le canton par nom
        $canton = Canton::where('name', $name)->first();

        if ($canton) {
            return response()->json(['canton' => $canton], 200);
        } else {
            return response()->json(['message' => 'Canton not found'], 404);
        }
    }
}
