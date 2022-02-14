<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\design;
use App\Models\subDesign;
use Illuminate\Http\Request;

class SubdesignController extends Controller
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
        //
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
            'model_no'    => 'required',
            'description' => 'required',
            'image'       => 'required | mimes:png,jpg,jpeg |max:7048'
        ],[
            'model_no.required'    => 'Enter Model No',
            'description.required' => 'Enter Description',
            'image.required'       => 'Please Enter Image',
            'image.mimes'          => 'Please Select png,jpg, jpeg format',
            'image.max'            => 'Image size must be 5 be maximum'
        ]);

        $sub_desgin = new subDesign();
        $sub_desgin->model_no    = $request->model_no;
        $sub_desgin->desgin_id   = $request->desgin_id;
        $sub_desgin->description = $request->description;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/subdesign/images/', $fileName);
            $sub_desgin->image = $fileName;
        } else {
            return $request;
            $sub_desgin->image = '';
        }

        $sub_desgin->save();
        return back()->with('success','Added Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_name = "Add Sub Design";
        $design = design::find($id);
        return view('admin.sub-design.index', compact('page_name','design'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_name  = "Update Sub Design";
        $subdesigns = subDesign::find($id);
        return view('admin.sub-design.edit', compact('page_name','subdesigns'));
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
            'model_no'    => 'required',
            'description' => 'required',
            'image'       => 'mimes:png,jpg,jpeg |max:7048'
        ],[
            'model_no.required'    => 'Enter Model No',
            'description.required' => 'Enter Description',
            'image.mimes'          => 'Please Select png,jpg, jpeg format',
            'image.max'            => 'Image size must be 5 be maximum'
        ]);

        $sub_desgin = subDesign::find($id);
        $sub_desgin->model_no    = $request->model_no;
        $sub_desgin->description = $request->description;

        if($request->image == ''){
            //
        }else{
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('images/subdesign/images/', $fileName);
                $sub_desgin->image = $fileName;
            } else {
                return $request;
                $sub_desgin->image = '';
            }
        }

        $sub_desgin->save();
        return back()->with('success','Update Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $design = subDesign::find($id);
        $design->delete();
        return back()->with('success','Delete Successfull');
    }
}
