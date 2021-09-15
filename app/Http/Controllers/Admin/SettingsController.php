<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use Session;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $setting = Setting::where('setting_slug','site-settings')->first();
        return view('admin.settings.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = Setting::where('setting_slug','site-settings')->first();
        if ($setting)
            return redirect('/admin/settings');
        else
            return view('admin.settings.create');
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
            'opening_day' => 'required',
            'closing_day' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'phone_number' => 'required',
            'email_address' => 'required',
            'facebook_link' => 'required',
            'instagram_link' => 'required',
            'location_address' => 'required',
            'site_name' => 'required',
            'about_info_short' => 'required',
            'about_info_long' => 'required',
            'about_banner' => 'required',
            'site_logo' => 'required',
            'fav_icon' => 'required'
        ]);

        // Uploading Logo
        $logo_file = $request->site_logo; 
        $logo_name = time().$logo_file->getClientOriginalName();
        $logo_file->move('public/uploads/settings/',$logo_name);

        // Uploading Fav Icon
        $fav_file = $request->fav_icon; 
        $fav_name = time().$fav_file->getClientOriginalName();
        $fav_file->move('public/uploads/settings/',$fav_name);

        // Uploading About Banner
        $banner_file = $request->about_banner; 
        $banner_name = time().$banner_file->getClientOriginalName();
        $banner_file->move('public/uploads/settings/',$banner_name);

        // Creating Settings
        Setting::create([
            'opening_day' => $request->opening_day,
            'closing_day' => $request->closing_day,
            'opening_time' => $request->opening_time,
            'closing_time' => $request->closing_time,
            'phone_number' => $request->phone_number,
            'email_address' => $request->email_address,
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link,
            'location_address' => $request->location_address,
            'site_name' => $request->site_name,
            'about_info_short' => $request->about_info_short,
            'about_info_long' => $request->about_info_long,
            'about_banner' => $banner_name,
            'site_logo' => $logo_name,
            'fav_icon' => $fav_name,
            'setting_slug' => 'site-settings'
        ]);

        Session::flash('success','Done');
        return redirect('/admin/settings');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->back();
        // $setting = Setting::where('setting_slug', $id)->first();
        // return view('admin.settings.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting = Setting::where('setting_slug', $id)->first();
        return view('admin.settings.edit', compact('setting'));
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
            'opening_day' => 'required',
            'closing_day' => 'required',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'phone_number' => 'required',
            'email_address' => 'required',
            'facebook_link' => 'required',
            'instagram_link' => 'required',
            'location_address' => 'required',
            'site_name' => 'required',
            'about_info_short' => 'required'
        ]);

        $setting = Setting::where('setting_slug', $id)->first();
        $banner_name = $setting->about_banner;
        $logo_name = $setting->site_logo;
        $fav_name = $setting->fav_icon;

        if ($request->has('site_logo')) {
            unlink('public/uploads/settings/'.$logo_name);
            // Uploading Logo
            $logo_file = $request->site_logo; 
            $logo_name = time().$logo_file->getClientOriginalName();
            $logo_file->move('public/uploads/settings/',$logo_name);
        }

        if ($request->has('fav_icon')) {
            unlink('public/uploads/settings/'.$fav_name);
            // Uploading Fav Icon
            $fav_file = $request->fav_icon; 
            $fav_name = time().$fav_file->getClientOriginalName();
            $fav_file->move('public/uploads/settings/',$fav_name);
        }

        if ($request->has('about_banner')) {
            unlink('public/uploads/settings/'.$banner_name);
            // Uploading About Banner
            $banner_file = $request->about_banner; 
            $banner_name = time().$banner_file->getClientOriginalName();
            $banner_file->move('public/uploads/settings/',$banner_name);
        }

        $setting->update([
            'opening_day' => $request->opening_day,
            'closing_day' => $request->closing_day,
            'opening_time' => $request->opening_time,
            'closing_time' => $request->closing_time,
            'phone_number' => $request->phone_number,
            'email_address' => $request->email_address,
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link,
            'location_address' => $request->location_address,
            'site_name' => $request->site_name,
            'about_info_short' => $request->about_info_short,
            'about_banner' => $banner_name,
            'site_logo' => $logo_name,
            'fav_icon' => $fav_name
        ]);

        Session::flash('success','Done');
        return redirect('/admin/settings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort(403, 'Unauthorized action.');
    }
}
