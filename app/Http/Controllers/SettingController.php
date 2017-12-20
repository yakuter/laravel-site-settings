<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Factory;
use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{

    public function index()
    {
        $settings = Setting::all();
        return view('index', compact('settings'));
    }

    public function create()
    {
        return view('new');
    }
    
    public function store(Request $request, Factory $cache)
    {
        $input = $request->all();
        
        $settings = [
            'option.required' => 'Please fill setting name.',
            'slug.required' => 'Please fill setting slug.',
            'value.required' => 'Please fill setting value.',
        ];

        $this->validate($request,[
            'option' => 'required|max:255',
            'slug' => 'required|max:255',
            'value' => 'required',
        ], $settings);
        
        Setting::create($input)->id;

        /* Important ********** */
        $cache->forget('settings');
        /* //Important ********** */
        
        $request->session()->flash('alert-success', 'Setting added successfully!');
        
        return redirect('/settings');
    }

    public function edit($id)
    {
        $setting   = Setting::findOrFail($id);
        return view('edit', compact('setting'));
    }

    public function update(Request $request, $id, Factory $cache)
    {

        $input = $request->all();

        $messages = [
            'option.required' => 'Please fill setting name.',
            'slug.required' => 'Please fill setting slug.',
            'value.required' => 'Please fill setting value.',
        ];

        $this->validate($request,[
            'option' => 'required|max:255',
            'slug' => 'required|max:255',
            'value' => 'required',
        ], $messages);
        
        $data = Setting::findOrFail($id);
        $data->fill($input)->save();

        /* Important ********** */
        $cache->forget('settings');
        /* //Important ********** */

        $request->session()->flash('alert-success', 'Setting updated successfully!');
        return redirect('/settings');
    }

    public function show($id)
    {
        $setting = Setting::findOrFail($id);
        return view('show', compact('setting'));
    }

    public function destroy($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->delete();
        $request->session()->flash('alert-success', 'Setting deleted successfully!');
        return redirect('/settings');
    }

}