<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\productMeta;
use App\Models\technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function technology(){
        $technologies = DB::table('technologies')->paginate(10);
        return view('pages.technology.index', compact('technologies'));
    }
    public function products(){
        $products = product::all();
        return view('pages.product.index', compact('products'));
    }

    public function product_show($id){
        $product = product::find($id);
        $product_desc = productMeta::all()->where('product_id','=',$id);
        // return $product_desc;
        return view('pages.product.show', compact('product_desc'));
    }
}
