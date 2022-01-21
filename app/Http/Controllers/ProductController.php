<?php

namespace App\Http\Controllers;

use App\Products_model;
use App\Categories_model;
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
        $products=Products_model::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categories_model::pluck('name', 'id');
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd($request);

        $this->validate($request,[
            'pro_name'=>'required',
            'pro_code'=>'required',
            'pro_price'=>'required',
            'pro_info'=>'required',
            'spl_price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'

        ]);

        $formInput = new Products_model();

        $formInput->pro_name = $request->input('pro_name');
        $formInput->pro_code = $request->input('pro_code');
        $formInput->pro_price = $request->input('pro_price');
        $formInput->pro_info = $request->input('pro_info');
        $formInput->spl_price = $request->input('spl_price');
        $formInput->stock = $request->input('stock');
        $formInput->category_id = $request->input('category_id');

        if ($request->hasfile('image')) 

        {
            $file = $request->file('image');
            $imageName = $file-> getClientOriginalName();
            $file->move('images', $imageName);
            $formInput->image = $imageName;

            
            $formInput->save();
        }

        return back ();
        
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
        $deleteData=Products_model::findOrFail($id);
        $deleteData->delete();

        return redirect()->back();
    }
}
