<?php

namespace App\Http\Controllers;
use App\Models\State;
use Illuminate\Http\Request;

class merchants extends Controller
{
    public function index()
    {
        $states = State::all();
        return view('merchant', compact('states'));
    }
}
