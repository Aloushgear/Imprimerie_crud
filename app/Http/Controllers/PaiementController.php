<?php

namespace App\Http\Controllers;

use App\Models\paiement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PaiementController extends Controller
{
    //
    public function index(){
        $contrat= DB::select("select contrat_id,nom,modele,cout_total from contrats,imprimantes,clients where contrats.client_id=clients.client_id and contrats.imprimante_id=imprimantes.imprimante_id;");
        //return view('savePaiement',compact('contrat'));
        return view('savePaiement')->with(compact('contrat'));
    }


    public function AddPaiement(Request $request){

        //return $request->input();die;

        if($request->isMethod('post')){
            $data=$request->all();
            $paiements = new paiement;
            $paiements->date=$data['dates'];
            $paiements->montant=$data['mont'];
            $paiements->contrat_id=$data['contrat'];
            $paiements->save();
            return back()->with('flash_message_succes', 'Veuillez ajouter les details du paiement.');

        }
        
        return view('welcome');

    }
}
