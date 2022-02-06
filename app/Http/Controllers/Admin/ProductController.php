<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_name = "All Products";
        $products = product::all();
        return view('admin.product.index', compact('page_name','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name = "Add Product";
        return view('admin.product.create', compact('page_name'));
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
            'product_name'  => 'required',
            'product_image' => 'mimes:jpg,png,jpeg|max:7048',
            'url'           => 'required | unique:products'
        ],[
            'product_name.required'  => 'Please Enter Product Name',
            'product_image.required' => 'Please Enter Product Image',
            'product_image.mimes'    => 'Please Select Jpg,png,jpeg Type',
            'product_image.max'      => 'Please Select Image Less Then 8 Mb',
            'url.required'           => 'Please Enter Blog URL',
            'url.unique'             => 'All Ready taken',
        ]);

        $product = new product();
        $product->product_name = $request->product_name;
        $product->url          = $request->url;

        if($request->image == ''){
            //
        }else{
            if ($request->hasFile('product_image')) {
                $file = $request->file('product_image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('images/product/images/', $fileName);
                $product->product_image = $fileName;
            } else {
                return $request;
                $product->product_image = '';
            }
        }

        $product->save();
        return back()->with('success','Product Added Successful');
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
        $page_name = "Update Product Data";
        $product   = product::find($id);
        return view('admin.product.edit', compact('page_name','product'));
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
            'name'  => 'required',
            'product_image' => 'required | mimes:jpg,png,jpeg|max:7048',
            'url'           => 'required | unique:products'
        ],[
            'name.required'  => 'Please Enter Product Name',
            'product_image.required' => 'Please Enter Product Image',
            'product_image.mimes'    => 'Please Select Jpg,png,jpeg Type',
            'product_image.max'      => 'Please Select Image Less Then 8 Mb',
            'url.required'           => 'Please Enter Blog URL',
            'url.unique '            => 'All Ready taken',
        ]);

        $product   = product::find($id);
        $product->name = $request->name;
        $product->url          = $request->url;

        if($request->product_image == ''){
            //
        }else{
            if ($request->hasFile('product_image')) {
                $file = $request->file('product_image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('images/product/images/', $fileName);
                $product->product_image = $fileName;
            } else {
                return $request;
                $product->product_image = '';
            }
        }
        $product->save();
        return back()->with('success','Product Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();
        return back()->with('success','Product Delete Successful');
    }
}
