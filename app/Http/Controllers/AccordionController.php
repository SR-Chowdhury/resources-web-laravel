<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccordionController extends Controller
{
    public function v1Method () {
        return view('accordion.v1');
    }
    public function v2Method () {
        return view('accordion.v2');
    }
    public function v3Method () {
        return view('accordion.v3');
    }
}
