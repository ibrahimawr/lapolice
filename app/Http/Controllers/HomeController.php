<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\arrondissement;
use App\Models\civil;
use App\Models\police;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {
        $user = Auth::user();
        if($user->statut == 'arrondissement'){
            $arrondissement = Arrondissement::where('userId', $user->id)->first();
            return view('arrondissement.dashboardarrondissement', compact('arrondissement'));
        }elseif($user->statut == 'civil'){
            $civil = Civil::where('userId', $user->id)->first();
            return view('civil.dashboardcivil', compact('civil'));
        }elseif($user->statut == 'police'){
            $police = Police::where('userId', $user->id)->first();
            return view('police.dashboardpolice', compact('police'));
        }
else{
    return view('home');
}
}


    /*public function dashboardarrondissement()
    {
        return view('dashboardarrondissement');
    }*/
}
