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
}
