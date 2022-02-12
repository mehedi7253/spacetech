<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\design;
use Illuminate\Http\Request;

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
        //
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
