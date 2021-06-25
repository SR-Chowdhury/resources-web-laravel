<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurbBackController extends Controller
{
    public function v1Method() {
        return view('curb-background.v1');
    }
}
