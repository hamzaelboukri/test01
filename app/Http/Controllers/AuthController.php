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
        $roles = role::all();
        return view('welcome', compact('roles'));

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
    $request->validate([
        'name' => 'required|unique:posts|max:255',
        'email' => 'required',
        'password' => 'required|min:8',
        'id_role' => 'required|exists:roles,id'
    ]);

    auth::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => hash($request->password),
        'id_role' => $request->id_role
    ]);
        

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
