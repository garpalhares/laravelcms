<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function __contruct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$settings = [];

    	$dbSettings = Setting::get();

    	foreach ($dbSettings as $dbSetting) {
    		$settings[ $dbSetting['name'] ] = $dbSetting['content'];
    	}

    	return view('admin.settings.index', [
    		'settings' => $settings,
    	]);
    }

    public function save(Request $request)
    {
    	$data = $request->only(['title', 'subtitle', 'email', 'background_color', 'text_color']);

    	$validator = $this->validator($data);

    	if ($validator->fails()) {
    		return redirect()->route('settings')->withErrors($validator);
    	}

    	foreach ($data as $settingName => $settingContent) {
    		Setting::where('name', $settingName)->update([
    			'content' => $settingContent
    		]);
    	}

    	return redirect()->route('settings')->with('warning', 'Informações alteradas com sucesso!');
    }

    public function validator($data)
    {
    	return Validator::make($data, [
    		'title' => ['string', 'max:100'],
    		'subtitle' => ['string', 'max:100'],
    		'email' => ['string', 'email'],
    		'background_color' => ['string', 'regex:/#[A-Z0-9]{6}/i'],
    		'text_color' => ['string', 'regex:/#[A-Z0-9]{6}/i'],
    	]);
    }
}
