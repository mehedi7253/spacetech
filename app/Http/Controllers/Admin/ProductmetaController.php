<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\productMeta;
use Illuminate\Http\Request;

class ProductmetaController extends Controller
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
        $this->validate($request, [
            'title'       => 'required',
            'description' => 'required',
            'image_one'   => 'mimes:jpg,png,jpeg|max:7048',
            'image_two'   => 'mimes:jpg,png,jpeg|max:7048',
            'image_three' => 'mimes:jpg,png,jpeg|max:7048',
        ],[
            'title.required'       => 'Please Enter Title',
            'description.required' => 'Please Enter Description',
            'image_one.mimes'      => 'Please Select Jpg,png,jpeg Type',
            'image_one.max'        => 'Please Select Image Less Then 8 Mb',
            'image_two.mimes'      => 'Please Select Jpg,png,jpeg Type',
            'image_two.max'        => 'Please Select Image Less Then 8 Mb',
            'image_three.mimes'    => 'Please Select Jpg,png,jpeg Type',
            'image_three.max'      => 'Please Select Image Less Then 8 Mb',
        ]);

        $product_meta = new productMeta();
        $product_meta->product_id  = $request->product_id;
        $product_meta->title       = $request->title;
        $product_meta->description = $request->description;

        if($request->image_one == ''){
            //
        }else{
            if ($request->hasFile('image_one')) {
                $file = $request->file('image_one');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('images/product/images/', $fileName);
                $product_meta->image_one = $fileName;
            } else {
                return $request;
                $product_meta->image_one = '';
            }
        }

        if($request->image_two == ''){
            //
        }else{
            if ($request->hasFile('image_two')) {
                $file = $request->file('image_two');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('images/product/images/', $fileName);
                $product_meta->image_two = $fileName;
            } else {
                return $request;
                $product_meta->image_two = '';
            }
        }

        if($request->image_three == ''){
            //
        }else{
            if ($request->hasFile('image_three')) {
                $file = $request->file('image_three');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('images/product/images/', $fileName);
                $product_meta->image_three = $fileName;
            } else {
                return $request;
                $product_meta->image_three = '';
            }
        }

        $product_meta->save();
        return back()->with('success','Added Successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page_name = "Add Product Data";
        $product = product::find($id);
        return view('admin.product-meta.index', compact('page_name','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page_name = "Update Product Description Data";
        $product = productMeta::find($id);
        return view('admin.product-meta.edit', compact('page_name','product'));
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
        $this->validate($request, [
            'title'       => 'required',
            'description' => 'required',
            'image_one'   => 'mimes:jpg,png,jpeg|max:7048',
            'image_two'   => 'mimes:jpg,png,jpeg|max:7048',
            'image_three' => 'mimes:jpg,png,jpeg|max:7048',
        ],[
            'title.required'       => 'Please Enter Title',
            'description.required' => 'Please Enter Description',
            'image_one.mimes'      => 'Please Select Jpg,png,jpeg Type',
            'image_one.max'        => 'Please Select Image Less Then 8 Mb',
            'image_two.mimes'      => 'Please Select Jpg,png,jpeg Type',
            'image_two.max'        => 'Please Select Image Less Then 8 Mb',
            'image_three.mimes'    => 'Please Select Jpg,png,jpeg Type',
            'image_three.max'      => 'Please Select Image Less Then 8 Mb',
        ]);

        $product_meta = productMeta::find($id);
        $product_meta->title       = $request->title;
        $product_meta->description = $request->description;

        if($request->image_one == ''){
            //
        }else{
            if ($request->hasFile('image_one')) {
                $file = $request->file('image_one');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('images/product/images/', $fileName);
                $product_meta->image_one = $fileName;
            } else {
                return $request;
                $product_meta->image_one = '';
            }
        }

        if($request->image_two == ''){
            //
        }else{
            if ($request->hasFile('image_two')) {
                $file = $request->file('image_two');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('images/product/images/', $fileName);
                $product_meta->image_two = $fileName;
            } else {
                return $request;
                $product_meta->image_two = '';
            }
        }

        if($request->image_three == ''){
            //
        }else{
            if ($request->hasFile('image_three')) {
                $file = $request->file('image_three');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('images/product/images/', $fileName);
                $product_meta->image_three = $fileName;
            } else {
                return $request;
                $product_meta->image_three = '';
            }
        }

        $product_meta->save();
        return back()->with('success','Added Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = productMeta::find($id);
        $product->delete();
        return back()->with('successs','Delete Successfull');
    }
}
