<?php

namespace App\Http\Controllers;

use App\Models\imprimantes;
use Illuminate\Http\Request;

class ImprimantesController extends Controller
{
    //

    public function getImprimantes(){
        $imprimantes = imprimantes::all();
        return $imprimantes;
        
    }



}
