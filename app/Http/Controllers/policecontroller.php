<?php

namespace App\Http\Controllers;

use App\Models\delit;
use App\Models\perte;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\police;


class policecontroller extends Controller
{
    //
    public function affichageformulaire()
    {
        // 
        return view('police.formulaire'); 
    }

    


    public function dashboardpolice()
    {
        return view('police.accueilpolice');
    }

   


    public function creerpolice(Request $request)
    {
        //
        $jugement = $request->validate(
            [
                'nom'=>['required', 'string', 'max:100'],
                'prenom'=>['required', 'string', 'max:100'],
                'adresse'=>['required', 'string', 'max:200'],
                'sexe'=>['required', 'string', 'max:100'],
                'telephone'=>['required', 'string', 'max:100'],
                'matricule'=>['required', 'string', 'max:100'],
                'grade'=>['required', 'string', 'max:100'],
                'affectation'=>['required', 'string', 'max:100'],
                'email'=>['required', 'string', 'max:200', 'min:5'],
                'motdepasse'=>['required', 'string', 'min:8', 'confirmed'],
            ]
        );
        //
        if($jugement)
        {
            $policeoupas = User::create(
                [
                    'name'=>$request['nom'],
                'email'=>$request['email'],
                'password'=>bcrypt($request['motdepasse']),
                'statut'=>'police',
                ]
            );
            if($policeoupas)
            {
                $police = police::create(
                    [
                        'userId'=>$policeoupas->id,
                        'nom'=>$request['nom'],
                    'prenom'=>$request['prenom'],
                    'adresse'=>$request['adresse'],
                    'sexe'=>$request['sexe'],
                    'telephone'=>$request['telephone'],
                    'matricule'=>$request['matricule'],
                    'grade'=>$request['grade'],
                    'affectation'=>$request['affectation'],
                    'email'=>$request['email'],
                    'motdepasse'=>bcrypt($request['motdepasse']),
                    ]  
                );
                //$police=police::All();
                //return view('/dashboardpolice')
                return redirect('/login');
            }
        }
    }
}

