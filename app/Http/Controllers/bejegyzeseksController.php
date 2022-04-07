<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\bejegyzeseks;

class bejegyzeseksController extends Controller
{
    public function index(Request $request)
    {
        return tevekenysegeks::all();

    }
}
