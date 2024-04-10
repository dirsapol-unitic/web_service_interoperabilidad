<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidadorSaludpolController extends Controller
{
    public function index()
    {
        return response()->json([
            "statusCode" => 200,
            "message" => "Validador de salud político",
            "data" => "Validador de salud político"
        ]);
    }
}
