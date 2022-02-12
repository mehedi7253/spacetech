<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\design;
use App\Models\subDesign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "All Designs";
        $desgins = design::all();
        return view('admin.design.index', compact('page_name','desgins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = "Add Designs";
        return view('admin.design.create', compact('page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'url'  => 'required | unique:designs'
        ],[
            'name.required' => 'Please Enter Name',
            'url.required'  => 'Please Enter URL',
            'url.unique'    => 'All Ready taken',
        ]);

        $design = new design();
        $design->name  = $request->name;
        $design->url   = $request->url;

        $design->save();
        return redirect()->route('designs.index')->with('success','Added Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_name = "All Sub Designs";
        $sub_design = subDesign::all()->where('desgin_id','=',$id);

        // $sub_design = DB::table('sub_designs')
        //            ->join('designs','designs.id','=','sub_designs.desgin_id')
        //            ->where('sub_designs.desgin_id','=',$id)
        //            ->get();
        return view('admin.sub-design.alldesign',compact('page_name','sub_design'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_name = "Update Design Data";
        $design = design::find($id);
        return view('admin.design.edit', compact('page_name','design'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
        ],[
            'name.required' => 'Please Enter Name',
        ]);

        $design = design::find($id);
        $design->name  = $request->name;
        $design->save();
        return redirect()->route('designs.index')->with('success','Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $design = design::find($id);
        $design->delete();
        return back()->with('success','Delete Successful');
    }
}
