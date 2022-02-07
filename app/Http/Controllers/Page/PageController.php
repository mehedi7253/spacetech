<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function technology(){
        $technologies = DB::table('technologies')->paginate(10);
        return view('pages.technology.index', compact('technologies'));
    }
}
