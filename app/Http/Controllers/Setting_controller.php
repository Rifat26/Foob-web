<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class Setting_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function admin_settings()
    // {
    //     echo view('admin_master.header');
    //     echo view('admin/admin_settings');
    //     echo view('admin_master.footer');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $setting = Setting::first();
        echo view('admin_master.header');
        echo view('admin/admin_settings', ['setting'=>$setting]);
        echo view('admin_master.footer');
        //return view('admin_settings' , ['setting'=>$setting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $setting = Setting::first();

        $setting->vendor_name = $request->name;
        $setting->vendor_logo = $request->logo;
        $setting->vendor_address = $request->address;
        $setting->vendor_phone = $request->phone;
        $setting->vendor_email = $request->email;
        $setting->fb_link = $request->fb;
        $setting->inst_link = $request->inst;
        $setting->twit_link = $request->twit;
        $setting->site_favicon = $request->fav_icon;

        $setting->save();

        return redirect(route('edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
}
