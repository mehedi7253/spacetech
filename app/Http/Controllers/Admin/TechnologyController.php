<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = "All Technologies";
        $technology = technology::all();
        return view('admin.techonology.create', compact('page_name','technology'));
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
            'tech_name'    => 'required',
            'image'        => 'required | mimes:jpg,png,jpeg|max:7048',
            'description'  => 'required',
            'url'          => 'required | unique:technologies'
        ],[
            'tech_name.required'   => 'Please Enter Technology Name',
            'image.required'       => 'Please Enter Technology Image',
            'image.mimes'          => 'Please Select Jpg,png,jpeg Type',
            'image.max'            => 'Please Select Image Less Then 8 Mb',
            'description.required' => 'Please Enter Description',
            'url.required'         => 'Please Enter Blog URL',
            'url.unique'           => 'All Ready taken',
        ]);

        $technology = new technology();
        $technology->tech_name   = $request->tech_name;
        $technology->description = $request->description;
        $technology->url         = $request->url;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('technology/product/images/', $fileName);
            $technology->image = $fileName;
        } else {
            return $request;
            $technology->image = '';
        }

        $technology->save();
        return back()->with('success','Technology Added Successful');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
