<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use App\Models\ProductService;
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
        $services  = ProductService::all();
        return view('admin.product.create', compact('page_name','services'));
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
            'model_no'      => 'required',
            'colum_one'     => 'required',
            'colum_tow'     => 'required',
            'colum_three'   => 'required',
            'image'         => 'required | mimes:jpg,png,jpeg|max:7048'

        ],[
            'model_no.required'  => 'Please Enter Product Model Number',
            'colum_one.required' => 'This Filed Must Be Not Empty',
            'colum_tow.required' => 'This Filed Must Be Not Empty',
            'image.required'     => 'Please Enter Product Image',
            'image.mimes'        => 'Please Select Jpg,png,jpeg Type',
            'image.max'          => 'Please Select Image Less Then 8 Mb',
        ]);

        $product = new product();
        $product->model_no    = $request->model_no;
        $product->service_id  = $request->service_id;
        $product->colum_one   = $request->colum_one;
        $product->colum_tow   = $request->colum_tow;
        $product->colum_three = $request->colum_three;
        $product->colum_four  = $request->colum_four;
        $product->colum_five  = $request->colum_five;
        $product->colum_six   = $request->colum_six;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/product/images/', $fileName);
            $product->image = $fileName;
        } else {
            return $request;
            $product->image = '';
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
        $services  = ProductService::all();
        return view('admin.product.edit', compact('page_name','product','services'));
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
            'model_no'      => 'required',
            'colum_one'     => 'required',
            'colum_tow'     => 'required',
            'image'         => 'mimes:jpg,png,jpeg|max:7048'

        ],[
            'model_no.required'  => 'Please Enter Product Model Number',
            'colum_one.required' => 'This Filed Must Be Not Empty',
            'colum_tow.required' => 'This Filed Must Be Not Empty',
            'image.mimes'        => 'Please Select Jpg,png,jpeg Type',
            'image.max'          => 'Please Select Image Less Then 8 Mb',
        ]);

        $product = product::find($id);
        $product->model_no    = $request->model_no;
        $product->colum_one   = $request->colum_one;
        $product->colum_tow   = $request->colum_tow;
        $product->colum_three = $request->colum_three;
        $product->colum_four  = $request->colum_four;
        $product->colum_five  = $request->colum_five;
        $product->colum_six   = $request->colum_six;

        if($request->image == ''){
            //
        }else{
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move('images/product/images/', $fileName);
                $product->image = $fileName;
            } else {
                return $request;
                $product->image = '';
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
