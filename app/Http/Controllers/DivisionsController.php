<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Divisions;

class DivisionsController extends Controller
{
    /**
     * Display a listing of the divisions.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $divisions = Divisions::all();
        return view('divisions.index', compact('divisions'));
    }

    // Implementa los métodos restantes del controlador (show, create, store, edit, update, destroy) de manera similar al ejemplo anterior
}
