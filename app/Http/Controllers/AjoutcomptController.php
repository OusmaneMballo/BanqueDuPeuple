<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compte;
use Illuminate\Support\Facades\Auth;
class AjoutcomptController extends Controller
{

   public function create(Request $request){
    $compte=new Compte();
    $compte->numero=$request->numero;
    $compte->solde=$request->solde;
    $resultat=$compte->save();
    return view('compt.AjoutCompt',['confirmation'=>$resultat]);

}
}
