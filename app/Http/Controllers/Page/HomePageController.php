<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function aboutus()
    {
        $aboutus = about::all();
        return view('welcome', compact('aboutus'));
    }
    public function technology()
    {
        $technology = DB::table('technologies')->paginate(1);
        return view('pages.technology.index', compact('technology'));
    }
    public function products()
    {
        return view('pages.product.index');
    }
}
