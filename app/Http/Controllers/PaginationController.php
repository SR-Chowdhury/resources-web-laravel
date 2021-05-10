<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PaginationController extends Controller
{
    public function pagination() {
        $pagination = DB::table('paginations')->paginate(3);
        return view('pagination/pagination', compact('pagination'));
    }
}
