<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
class supprimerclientController extends Controller
{
    public function delete($id){
        $Client=CLient::find($id);
        if($Client!=null){
            $resultat=$Client->delete();
        }
        return view('client.ListClient',$resultat);
    }
}
