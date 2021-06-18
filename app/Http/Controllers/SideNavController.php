<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SideNavController extends Controller
{
    public function v1Method() {
        return view('side-navbar.v1');
    }
}
