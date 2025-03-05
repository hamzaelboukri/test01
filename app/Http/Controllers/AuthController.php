<?php

namespace App\Http\Controllers;

use App\Models\auth;
use App\Http\Requests\StoreauthRequest;
use App\Http\Requests\UpdateauthRequest;
use App\Models\role;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles= role::;
        return view('welcome',compact('roles') );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreauthRequest $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:posts|max:255',
            'email' => 'required',
            'password' => 'required|min8',
            'id_role' => 'id'

        ]);
      $validated= auth::tempnam();
        

    }

    /**
     * Display the specified resource.
     */
    public function show(auth $auth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(auth $auth)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateauthRequest $request, auth $auth)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(auth $auth)
    {
        //
    }
}
