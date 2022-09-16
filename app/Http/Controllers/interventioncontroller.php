<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\intervention;
use Illuminate\Support\Facades\Auth;

class interventioncontroller extends Controller
{
    //
    public function formulaireintervention()
    {
        // 
        return view('intervention.formulaireintervention'); 
    }

    public function creerintervention(Request $request)
    {
        //
        $pouruneintervention = $request->validate(
            [
                'type'=>['required', 'string', 'max:100'],
                'lieu'=>['required', 'string', 'max:100'],
                'genre'=>['required', 'string', 'max:200'],
            ]
        );
        //
        if($pouruneintervention)
        {
           $user = Auth::user();
                $intervention = intervention::create(
                    [
                        'userId'=>$user->id,
                        'type'=>$request['type'],
                    'lieu'=>$request['lieu'],
                    'genre'=>$request['genre'],
                    ]  
                );
                return redirect('/dashboardcivil');
            }
        
    }
}
