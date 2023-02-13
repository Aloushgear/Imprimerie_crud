<?php

namespace App\Http\Controllers;

use App\Models\contrats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContratsController extends Controller
{
    //
    public function getContrats(){
        //$contrat = contrats::all();
        $contrat= DB::select("select contrat_id,nom,modele from contrats,imprimantes,clients where contrats.client_id=clients.client_id and contrats.imprimante_id=imprimantes.imprimante_id;");
        return $contrat;
    }
    public function deleteContrats($id){
        
        contrats::where(['contrat_id'=>$id])->delete();
        echo "nice"; die;
        //return $contrat;
    }
}
