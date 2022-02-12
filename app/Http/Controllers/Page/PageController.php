<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\contactus;
use App\Models\design;
use App\Models\ProductService;
use App\Models\teamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function technology(){
        $technologies = DB::table('technologies')->paginate(10);
        return view('pages.technology.index', compact('technologies'));
    }
    public function products(){
        $services = ProductService::all();
        return view('pages.product.index', compact('services'));
    }

    public function product_show($url)
    {
        $services = DB::table('product_services')->where('url','=',$url)->get();
        foreach($services as $service)
        {
            $service_id = $service->id;
        }
        $products = DB::table('products')->where('service_id','=', $service_id)->get();
        return view('pages.product.show', compact('products', 'services'));
    }

    public function fetaures(){
        return view('pages.features.index');
    }
    public function teamMembers(){
        $members = teamMember::all();
        return view('pages.about.team_member', compact('members'));
    }

    public function contactForm()
    {
        return view('pages.contact.index');
    }

    public function contactStore(Request $request)
    {
        $this->validate($request,[
            'name'    => 'required',
            'email'   => 'required',
            'phone'   => 'required',
            'message' => 'required'
        ],[
            'name.required'    => 'Please Enter Name',
            'email.required'   => 'Please Enter Email',
            'phone.required'   => 'Please Enter Phone Number',
            'message.required' => 'Please Enter Message',
        ]);

        $contact = new contactus();
        $contact->name    = $request->name;
        $contact->email   = $request->email;
        $contact->phone   = $request->phone;
        $contact->message = $request->message;

        $contact->save();
        return back()->with('success','Sent Successfull...!');
    }

    public function aboutUs()
    {
        return view('pages.about.index');
    }
    public function desgin(){
        $designs = design::all();
        return view('pages.design.index', compact('designs'));
    }

}
