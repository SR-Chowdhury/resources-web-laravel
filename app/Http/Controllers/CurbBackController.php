<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurbBackController extends Controller
{
    public function v1Method() {
        return view('curb-background.v1');
    }
    public function v2Method () {
        return view('curb-background.v2');
    }
    public function v3Method () {
        return view('curb-background.v3');
    }
    public function v4Method () {
        return view('curb-background.v4');
    }
    public function v5Method () {
        return view('curb-background.v5');
    }
    public function v6Method () {
        return view('curb-background.v6');
    }
    public function v7Method () {
        return view('curb-background.v7');
    }
}
