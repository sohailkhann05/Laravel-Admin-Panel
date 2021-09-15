<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use Session;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

        // Uploading Icon
        $icon_file = $request->icon;
        $icon_name = time().$icon_file->getClientOriginalName();
        $icon_file->move('public/uploads/services/',$icon_name);

        Service::create([
            'icon' => $icon_name,
            'title' => $request->title,
            'description' => $request->description,
            'service_slug' => str_slug($request->title)
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
        $service = Service::where('service_slug', $id)->first();
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::where('service_slug', $id)->first();
        return view('admin.services.edit', compact('service'));
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

        $service = Service::find($id);
        $icon_name = $service->icon;

        // Uploading Icon
        if ($request->has('icon')) {
            unlink('public/uploads/services/'.$icon_name);
            $icon_file = $request->icon;
            $icon_name = time().$icon_file->getClientOriginalName();
            $icon_file->move('public/uploads/services/',$icon_name);
        }

        $service->update([
            'icon' => $icon_name,
            'title' => $request->title,
            'description' => $request->description,
            'service_slug' => str_slug($request->title)
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
