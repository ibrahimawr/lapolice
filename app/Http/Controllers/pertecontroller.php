<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\perte;
use Illuminate\Support\Facades\Auth;

class pertecontroller extends Controller
{
    //
    public function formulaireperdre()
    {
        // 
        return view('perte.formulaireperdre'); 
    }


    public function creerperte(Request $request)
    {
        //
        $pouruneperte = $request->validate(
            [
                'typepiece'=>['required', 'string', 'max:100'],
                'nomperdant'=>['required', 'string', 'max:100'],
                'prenomperdant'=>['required', 'string', 'max:100'],
                'dateperte'=>['required', 'string', 'max:100'],
                'numeroperdant'=>['required', 'string', 'max:100'],
                'lieuramassage'=>['required', 'string', 'max:100'],
                'nomrerouvant'=>['required', 'string', 'max:100'],
                'prenomretrouvant'=>['required', 'string', 'max:100'],
                'telephoneretrouvant'=>['required', 'string', 'max:100'],
            ]
        );
        //
        if($pouruneperte)
        {
           $user = Auth::user();
                $delit = perte::create(
                    [
                        'userId'=>$user->id,
                        'typepiece'=>$request['typepiece'],
                    'nomperdant'=>$request['nomperdant'],
                    'prenomperdant'=>$request['prenomperdant'],
                    'dateperte'=>$request['dateperte'],
                    'numeroperdant'=>$request['numeroperdant'],
                    'lieuramassage'=>$request['lieuramassage'],
                    'nomrerouvant'=>$request['nomrerouvant'],
                    'prenomretrouvant'=>$request['prenomretrouvant'],
                    'telephoneretrouvant'=>$request['telephoneretrouvant'],
                    ]  
                );
                return redirect('/dashboardcivil');
            }
        
    }
}
