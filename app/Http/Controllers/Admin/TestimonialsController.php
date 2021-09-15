<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Testimonial;
use Session;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonials.create');
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
            'name' => 'required',
            'picture' => 'required',
            'feedback' => 'required'
        ]);

        // Uploading customer photo
        $file = $request->picture;
        $name = time().$file->getClientOriginalName();
        $file->move('public/uploads/testimonials/',$name);

        Testimonial::create([
            'name' => $request->name,
            'feedback' => $request->feedback,
            'picture' => $name
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
        $testimonial = Testimonial::find($id);
        return view('admin.testimonials.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.testimonials.edit', compact('testimonial'));
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
            'name' => 'required',
            'feedback' => 'required'
        ]);

        $testimonial = Testimonial::find($id);
        $name = $testimonial->picture;

        // Uploading customer photo
        if ($request->has('picture')) {
            unlink('public/uploads/testimonials/'.$name);
            $file = $request->picture;
            $name = time().$file->getClientOriginalName();
            $file->move('public/uploads/testimonials/',$name);
        }

        $testimonial->update([
            'name' => $request->name,
            'feedback' => $request->feedback,
            'picture' => $name
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
        //
    }
}
