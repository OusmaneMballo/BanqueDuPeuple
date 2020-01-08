<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homController extends Controller
{
    public function __construct(){
         $this.Middleware('auth');
    }
}
