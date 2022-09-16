<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\arrondissement;

class arrondissementcontroller extends Controller
{
    //
    public function affichageformulaire()
    {
        // 
        return view('arrondissement.formulaire'); 
    }

    public function dashboardarrondissement()
    {
        return view('arrondissement.accueilarrondissement');
    }

    public function creerarrondissement(Request $request)
    {
        //
        $inspection = $request->validate(
            [
                'nom'=>['required', 'string', 'max:100'],
                'prenom'=>['required', 'string', 'max:100'],
                'adresse'=>['required', 'string', 'max:200'],
                'sexe'=>['required', 'string', 'max:100'],
                'telephone'=>['required', 'string', 'max:100'],
                'region'=>['required', 'string', 'max:100'],
                'numero_arrondissement'=>['required', 'string', 'max:100'],
                'email'=>['required', 'string', 'max:200', 'min:5'],
                'motdepasse'=>['required', 'string', 'min:8', 'confirmed'],
            ]
        );
        //
        if($inspection)
        {
            $policieroucivil = User::create(
                [
                    'name'=>$request['nom'],
                'email'=>$request['email'],
                'password'=>bcrypt($request['motdepasse']),
                'statut'=>'arrondissement',
                ]
            );
            if($policieroucivil)
            {
                $arrondissement = arrondissement::create(
                    [
                        'userId'=>$policieroucivil->id,
                        'nom'=>$request['nom'],
                    'prenom'=>$request['prenom'],
                    'adresse'=>$request['adresse'],
                    'sexe'=>$request['sexe'],
                    'telephone'=>$request['telephone'],
                    'region'=>$request['region'],
                    'numero_arrondissement'=>$request['numero_arrondissement'],
                    'email'=>$request['email'],
                    'motdepasse'=>bcrypt($request['motdepasse']),
                    ]  
                );
                return redirect('/login');
            }
        }
    }
}

