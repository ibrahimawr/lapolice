<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\delit;
use Illuminate\Support\Facades\Auth;

class delitcontroller extends Controller
{
    //
    public function formulairedelit()
    {
        // 
        return view('delit.formulairedelit'); 
    }


    public function creerdelit(Request $request)
    {
        //
        $pourundelit = $request->validate(
            [
                'type'=>['required', 'string', 'max:100'],
                'lieu'=>['required', 'string', 'max:100'],
                'ampleur'=>['required', 'string', 'max:200'],
            ]
        );
        //
        if($pourundelit)
        {
           $user = Auth::user();
                $delit = delit::create(
                    [
                        'userId'=>$user->id,
                        'type'=>$request['type'],
                    'lieu'=>$request['lieu'],
                    'ampleur'=>$request['ampleur'],
                    ]  
                );
                return redirect('/dashboardcivil');
            }
        
    }
}
