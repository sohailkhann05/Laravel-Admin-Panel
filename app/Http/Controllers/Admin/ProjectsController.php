<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProjectCategory;
use App\Project;
use Session;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ProjectCategory::all();
        return view('admin.projects.create', compact('categories'));
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
            'project_category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'banner' => 'required'
        ]);

        // Uploading Banner
        $banner_file = $request->banner;
        $banner_name = time().$banner_file->getClientOriginalName();
        $banner_file->move('public/uploads/projects/',$banner_name);

        Project::create([
            'project_category_id' => $request->project_category_id,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'banner' => $banner_name,
            'project_slug' => str_slug($request->title)
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
        $project = Project::where('project_slug', $id)->first();
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = ProjectCategory::all();
        $project = Project::where('project_slug', $id)->first();
        return view('admin.projects.edit', compact('project','categories'));
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
            'project_category_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'link' => 'required'
        ]);

        $project = Project::find($id);
        $banner_name = $project->banner;
        if ($request->has('banner')) {
            unlink('public/uploads/projects/'.$banner_name);
            // Uploading Banner
            $banner_file = $request->banner;
            $banner_name = time().$banner_file->getClientOriginalName();
            $banner_file->move('public/uploads/projects/',$banner_name);
        }

        $project->update([
            'project_category_id' => $request->project_category_id,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'banner' => $banner_name,
            'project_slug' => str_slug($request->title)
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
