<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conferences;

class ConferencesController extends Controller
{
    /**
     * Display a listing of the conferences.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conferences = Conferences::all();
        return view('conferences.index', compact('conferences'));
    }

    /**
     * Show the form for creating a new conference.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conferences.create');
    }

    /**
     * Store a newly created conference in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Logic to store a new conference
    }

    /**
     * Display the specified conference.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conference = Conferences::findOrFail($id);
        return view('conferences.show', compact('conferences'));
    }

    /**
     * Show the form for editing the specified conference.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conference = Conferences::findOrFail($id);
        return view('conferences.edit', compact('conferences'));
    }

    /**
     * Update the specified conference in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Logic to update the conference
    }

    /**
     * Remove the specified conference from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Logic to delete the conference
    }
}
