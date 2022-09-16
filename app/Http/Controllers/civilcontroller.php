<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\civil;

class civilcontroller extends Controller
{
    //
    public function affichageformulaire()
    {
        // 
        return view('civil.formulaire'); 
    }


    public function dashboardcivil()
    {
        return view('civil.dashboardcivil');
    }


    public function creercivil(Request $request)
    {
        //
        $observation = $request->validate(
            [
                'nom'=>['required', 'string', 'max:100'],
                'prenom'=>['required', 'string', 'max:100'],
                'adresse'=>['required', 'string', 'max:200'],
                'sexe'=>['required', 'string', 'max:100'],
                'telephone'=>['required', 'string', 'max:100'],
                'situation'=>['required', 'string', 'max:100'],
                'profession'=>['required', 'string', 'max:100'],
                'email'=>['required', 'string', 'max:200', 'min:5'],
                'motdepasse'=>['required', 'string', 'min:8', 'confirmed'],
            ]
        );
        //
        if($observation)
        {
            $civiloupas = User::create(
                [
                    'name'=>$request['nom'],
                'email'=>$request['email'],
                'password'=>bcrypt($request['motdepasse']),
                'statut'=>'civil',
                ]
            );
            if($civiloupas)
            {
                $civil = civil::create(
                    [
                        'userId'=>$civiloupas->id,
                        'nom'=>$request['nom'],
                    'prenom'=>$request['prenom'],
                    'adresse'=>$request['adresse'],
                    'sexe'=>$request['sexe'],
                    'telephone'=>$request['telephone'],
                    'situation'=>$request['situation'],
                    'profession'=>$request['profession'],
                    'email'=>$request['email'],
                    'motdepasse'=>bcrypt($request['motdepasse']),
                    ]  
                );
                return redirect('/login');
            }
        }
    }
}
