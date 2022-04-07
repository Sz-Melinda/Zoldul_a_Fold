<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tevekenysegeks;

class tevekenysegeksController extends Controller
{
    public function index()
    {

        return tevekenysegeks::all();
    }
}
