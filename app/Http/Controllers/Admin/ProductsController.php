<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('title','asc')->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
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
            'title' => 'required',
            'description' => 'required',
            'logo' => 'required'
        ]);

        // Uploading Logo
        $logo_file = $request->logo;
        $logo_name = time().$logo_file->getClientOriginalName();
        $logo_file->move('public/uploads/products/',$logo_name);

        Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'logo' => $logo_name,
            'product_slug' => str_slug($request->title)
        ]);

        Session::flash('success','Done');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('product_slug', $id)->first();
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::where('product_slug', $id)->first();
        return view('admin.products.edit', compact('product'));
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
            'title' => 'required',
            'description' => 'required'
        ]);

        $product = Product::find($id);
        $logo_name = $product->logo;

        if ($request->has('logo')) {
            // Unlinking old logo file
            unlink('public/uploads/products/'.$product->logo);
            // Uploading Logo
            $logo_file = $request->logo;
            $logo_name = time().$logo_file->getClientOriginalName();
            $logo_file->move('public/uploads/products/',$logo_name);
        }

        $product->update([
            'title' => $request->title,
            'description' => $request->description,
            'logo' => $logo_name,
            'product_slug' => str_slug($request->title)
        ]);

        Session::flash('success','Done');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        unlink('public/uploads/products/'.$product->logo);
        $product->delete();

        Session::flash('success','Done');
        return redirect('/admin/products');
    }
}
