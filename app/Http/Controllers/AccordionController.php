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
    public function v4Method () {
        return view('accordion.v4');
    }
    public function v5Method () {
        return view('accordion.v5');
    }
    public function v6Method () {
        return view('accordion.v6');
    }
    public function v7Method () {
        return view('accordion.v7');
    }
}
