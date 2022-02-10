<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "All Service Service";
        $services = ProductService::all();
        return view('admin.services.index', compact('page_name','services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = "Add Service";
        return view('admin.services.create', compact('page_name'));
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
            'service_name'  => 'required',
            'service_image' => 'mimes:jpg,png,jpeg|max:7048',
            'url'           => 'required | unique:product_services'
        ],[
            'service_name.required'  => 'Please Enter Service Name',
            'service_image.required' => 'Please Enter Service Image',
            'service_image.mimes'    => 'Please Select Jpg,png,jpeg Type',
            'service_image.max'      => 'Please Select Image Less Then 8 Mb',
            'url.required'           => 'Please Enter URL',
            'url.unique'             => 'This URL All Ready taken',
        ]);

        $service = new ProductService();
        $service->service_name = $request->service_name;
        $service->url          = $request->url;

        if($request->service_image == ''){
            //
        }else{
            if ($request->hasFile('service_image')) {
                $file = $request->file('service_image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('images/service/images/', $fileName);
                $service->service_image = $fileName;
            } else {
                return $request;
                $service->service_image = '';
            }
        }

        $service->save();
        return back()->with('success','Service Added Successful');
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
        $page_name = "Update Service Data";
        $service   = ProductService::find($id);
        return view('admin.services.edit', compact('page_name','service'));
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
            'service_name'  => 'required',
            'service_image' => 'mimes:jpg,png,jpeg|max:7048',
        ],[
            'service_name.required'  => 'Please Enter Service Name',
            'service_image.mimes'    => 'Please Select Jpg,png,jpeg Type',
            'service_image.max'      => 'Please Select Image Less Then 8 Mb',
        ]);

        $service   = ProductService::find($id);
        $service->service_name = $request->service_name;
        if($request->service_image == ''){
            //
        }else{
            if ($request->hasFile('service_image')) {
                $file = $request->file('service_image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('images/Service/images/', $fileName);
                $service->service_image = $fileName;
            } else {
                return $request;
                $service->service_image = '';
            }
        }
        $service->save();
        return back()->with('success','Service Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = ProductService::find($id);
        $service->delete();
        return back()->with('success','Service Delete Successful');
    }
}
