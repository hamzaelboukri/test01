<?php

namespace App\Http\Controllers;

use App\Models\role;
use App\Http\Requests\StoreroleRequest;
use App\Http\Requests\UpdateroleRequest;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function store(StoreroleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(role $role)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateroleRequest $request, role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(role $role)
    {
        //
    }
}
