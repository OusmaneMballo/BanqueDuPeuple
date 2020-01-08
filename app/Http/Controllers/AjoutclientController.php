<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Auth;

class AjoutclientController extends Controller
{

   public function create(Request $request){
       $client=new Client();
       $client->nom=$request->nom;
       $client->prenom=$request->prenom;
       $client->mail=$request->mail;
       $client->adresse=$request->adresse;
       $client->telephone=$request->telephone;
       $client->id_user=Auth::id();
       $resultat=$client->save();
       return view('client.AjoutClient',['confirmation'=>$resultat]);

   }
}
