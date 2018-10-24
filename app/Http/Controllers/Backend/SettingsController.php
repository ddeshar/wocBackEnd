<?php

namespace App\Http\Controllers\Backend;

use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data = Settings::orderBy('order', 'ASC')->get();
        
        $settings = [];
        $settings['Group'] = [];
        foreach ($data as $d) {
            if ($d->group == '' || $d->group == 'Group') {
                $settings['Group'][] = $d;
            } else {
                $settings[$d->group][] = $d;
            }
        }
        if (count($settings['Group']) == 0) {
            unset($settings['Group']);
        }

        $groups_data = Settings::select('group')->distinct()->get();
        $groups = [];
        foreach ($groups_data as $group) {
            if ($group->group != '') {
                $groups[] = $group->group;
            }
        }
        
        return view('backend.settings.index', compact('settings', 'groups', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        $settings = new Settings;

        $groups_data = Settings::select('group')->distinct()->get();
        $groups = [];
        foreach ($groups_data as $group) {
            if ($group->group != '') {
                $groups[] = $group->group;
            }
        }

        return view('backend.settings.create', compact('settings','groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $setting = new Settings;

        $key = implode('.', [str_slug($request->input('group')), $request->input('key')]);

        $setting->display_name        = $request->display_name; 
        $setting->key                 = $key;
        $setting->type                = $request->type; 
        $setting->group               = $request->group;

        $setting->save();

        return redirect()->route('setting.edit', $setting->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $setting = Settings::findOrFail($id);

        $groups_data = Settings::select('group')->distinct()->get();
        $groups = [];
        foreach ($groups_data as $group) {
            if ($group->group != '') {
                $groups[] = $group->group;
            }
        }

        return view('backend.settings.edit', compact('setting','groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){

        // dd($request);
        $setting = Settings::findOrFail($id);

        $key = preg_replace('/^'.str_slug($setting->group).'./i', '', $setting->key);

        $setting->group = $request->input(str_replace('.', '_', $setting->key).'_group');
        $setting->key = implode('.', [str_slug($setting->group), $key]);
        $setting->value       = $request->value; 

        $setting->save();

        return redirect()->route('setting.index')->with('success','Setting Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $setting = Settings::find($id);
        $setting->delete();

        return redirect()->back();
    }
}
