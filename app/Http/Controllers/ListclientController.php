<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
class ListclientController extends Controller
{
    public function getAll(){
        $listClient=Client::all();

        return view('client.ListClient', ['listClient' => $listClient]);
    }
}
