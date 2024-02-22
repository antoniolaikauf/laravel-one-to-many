<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\type;

class typeController extends Controller
{
    public function index()
    {
        $types = type::all();
        return view('pages.index', compact('types'));
    }
}
