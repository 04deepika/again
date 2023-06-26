<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donorform;

class DonorformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Donorform::all();
        return view('frontend.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.donor.donorform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Age' => 'required',
            'Address' => 'required',
            'Group' => ['required']
        ]);
        $post = new Donorform();
        $post->Name = $request->input('Name');
        $post->Email = $request->input('Email');
        $post->Age = $request->input('Age');
        $post->Address = $request->input('Address');
        $post->Group = $request->input('Group');
       
        $post->save();
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
