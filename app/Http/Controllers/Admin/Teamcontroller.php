<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\teamMember;
use Illuminate\Http\Request;

class Teamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "All Team Member's";
        $member = teamMember::all();
        return view('admin.team.index', compact('page_name','member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = "Add Team Member";
        return view('admin.team.create', compact('page_name'));
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
            'name'        => 'required',
            'designation' => 'required',
            'image'       => 'required | mimes:png,jpg,jpeg |max:7048',
        ],[
            'name.required'        => 'Please Enter Name',
            'designation.required' => 'please Enter Designation',
            'image.required'       => 'Please Enter Image',
            'image.mimes'          => 'Please Select png,jpg, jpeg format',
            'image.max'            => 'Image size must be 5 be maximum'
        ]);

        $member = new teamMember();
        $member->name = $request->name;
        $member->designation = $request->designation;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/team/images/', $fileName);
            $member->image = $fileName;
        } else {
            return $request;
            $member->image = '';
        }

        $member->save();
        return back()->with('success','Team Member Added Successful');

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
