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
        $members = teamMember::all();
        return view('admin.team.index', compact('page_name','members'));
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
        $page_name = "Update Data";
        $team = teamMember::find($id);
        return view('admin.team.edit', compact('page_name','team'));
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
            'name'        => 'required',
            'designation' => 'required',
            'image'       => 'mimes:png,jpg,jpeg |max:7048',
        ],[
            'name.required'        => 'Please Enter Name',
            'designation.required' => 'please Enter Designation',
            'image.mimes'          => 'Please Select png,jpg, jpeg format',
            'image.max'            => 'Image size must be 5 be maximum'
        ]);

        $member = teamMember::find($id);
        $member->name = $request->name;
        $member->designation = $request->designation;

        if($request->image == ''){
            //
        }else{
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
        }
        $member->save();
        return back()->with('success','Team Member Update Successful');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = teamMember::find($id);
        $team->delete();
        return back()->with('success','Delete Successful');
    }
}
