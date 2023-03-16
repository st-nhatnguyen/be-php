<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::where('id', $id)->first();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        User::where('id', $request->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);
    }

    /**
     * 
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        User::find($request->id)->delete();
    }

    public function trash()
    {
        return User::onlyTrashed()->get();
    }

    public function restore(Request $request)
    {
        return User::withTrashed()
            ->where('id', $request->id)
            ->restore();
        ;
    }
}