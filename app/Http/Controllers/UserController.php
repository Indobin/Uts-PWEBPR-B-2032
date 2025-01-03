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
        $contacts = User::all();
        return view('contacts.mahasiswa.index', ['contacts' => $contacts]);   //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
        ]);
        return redirect()->route('Contact/Mahasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view("contacts.mahasiswa.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update([
            "name" => $request->name,
            "email" => $request->email,
            "phone_number" => $request->phone_number,
        ]);
        return redirect()->route("Contact/Mahasiswa");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
