<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProjectCategory;
use Session;

class ProjectCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = ProjectCategory::all();
        return view('admin.project-categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project-categories.create');
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
            'icon' => 'required',
            'background' => 'required'
        ]);

        // Uploading Icon
        $icon_file = $request->icon;
        $icon_name = time().$icon_file->getClientOriginalName();
        $icon_file->move('public/uploads/categories/',$icon_name);

        // Uploading Background
        $bg_file = $request->background;
        $bg_name = time().$bg_file->getClientOriginalName();
        $bg_file->move('public/uploads/categories/',$bg_name);

        ProjectCategory::create([
            'title' => $request->title,
            'icon' => $icon_name,
            'background' => $bg_name,
            'category_slug' => str_slug($request->title)
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
        $category = ProjectCategory::where('category_slug', $id)->first();
        return view('admin.project-categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = ProjectCategory::where('category_slug', $id)->first();
        return view('admin.project-categories.edit', compact('category'));
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
            'title' => 'required'
        ]);

        $category = ProjectCategory::find($id);
        $icon_name = $category->icon;
        $bg_name = $category->background;

        if ($request->has('icon')) {
            unlink('public/uploads/categories/',$category->icon);
            // Uploading Icon
            $icon_file = $request->icon;
            $icon_name = time().$icon_file->getClientOriginalName();
            $icon_file->move('public/uploads/categories/',$icon_name);
        }

        if ($request->has('background')) {
            unlink('public/uploads/categories/',$category->background);
            // Uploading Background
            $bg_file = $request->background;
            $bg_name = time().$bg_file->getClientOriginalName();
            $bg_file->move('public/uploads/categories/',$bg_name);
        }

        $category->update([
            'title' => $request->title,
            'icon' => $icon_name,
            'background' => $bg_name,
            'category_slug' => str_slug($request->title)
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
        $category = ProjectCategory::find($id);
        unlink('public/uploads/categories/',$category->icon);
        unlink('public/uploads/categories/',$category->background);
        $category->delete();
        Session::flash('success','Done');
        return redirect('/admin/project-categories');
    }
}
