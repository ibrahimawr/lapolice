<?php

namespace App\Http\Controllers;

use App\Models\delit;
use Illuminate\Http\Request;

class delitlisteController extends Controller

{
    public function index()
    {
    $delit=delit::all();
        return view('police.delitliste', compact('delit'));
    }
    
  

}
