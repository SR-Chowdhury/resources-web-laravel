<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimationController extends Controller
{
    public function v1Method () {
        return view('animation.animationv1.v1');
    }
    public function v2Method () {
        return view('animation.animationv1.v2');
    }
    public function v3Method () {
        return view('animation.animationv1.v3');
    }
    public function v4Method () {
        return view('animation.animationv1.v4');
    }
    public function v5Method () {
        return view('animation.animationv1.v5');
    }
    public function v6Method () {
        return view('animation.animationv1.v6');
    }
    public function v7Method () {
        return view('animation.animationv1.v7');
    }
}
