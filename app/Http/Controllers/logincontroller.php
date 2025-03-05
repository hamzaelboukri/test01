<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreauthRequest;
use App\Models\auth;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function index(){

        return view('login');
    }



    public function store(StoreauthRequest $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required|min8',

        ]);

        if(auth::check()){
            return redirect()->route('test');
        }
        
       else {
        return redirect()->route('test');
       }
    }

}
