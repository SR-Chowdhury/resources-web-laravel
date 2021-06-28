<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function v1Method () {
        return view('navbar.v1');
    }
    public function v2Method () {
        return view('navbar.v2');
    }
    public function v3Method () {
        return view('navbar.v3');
    }
    public function v4Method () {
        return view('navbar.v4');
    }
    public function v5Method () {
        return view('navbar.v5');
    }
    public function v6Method () {
        return view('navbar.v6');
    }
    public function v7Method () {
        return view('navbar.v7');
    }
    public function v8Method () {
        return view('navbar.v8');
    }
}
