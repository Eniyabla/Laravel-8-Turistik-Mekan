<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $data= Setting::first();
        if(!$data){
            $data= new Setting;
            $data->title="Tur Mek";
            $data->save();
            $data= Setting::first();
        }
        return view('admin.setting_edit',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\RedirectResponse
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Setting $setting)
    {
        $id=$request->Input('id');
        $data=Setting::find($id);
        $data->title=$request->Input('title');
        $data->keywords=$request->Input('keywords');
        $data->description=$request->Input('description');
        $data->company=$request->Input('company');
        $data->address=$request->Input('address');
        $data->phone=$request->Input('phone');
        $data->fax=$request->Input('fax');
        $data->email=$request->Input('email');
        $data->smtpserver=$request->Input('smtpserver');
        $data->smtpemail=$request->Input('smtpemail');
        $data->smtpport=$request->Input('smtpport');
        $data->smtppassword=$request->Input('smtppassword');
        $data->facebook=$request->Input('facebook');
        $data->youtube=$request->Input('youtube');
        $data->twitter=$request->Input('twitter');
        $data->instagram=$request->Input('instagram');
        $data->linkedin=$request->Input('linkedin');
        $data->aboutus=$request->Input('aboutus');
        $data->contact=$request->Input('contact');
        $data->references=$request->Input('references');
        $data->status=$request->Input('status');
        $data->save();
        return redirect()->route('admin_setting');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
