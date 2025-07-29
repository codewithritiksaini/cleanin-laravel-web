<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function __construct()
    {
        view()->share('title', 'Settings');
    }

    public function edit()
    {
        $setting = Setting::first();
        return view('admin.settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token');

        // Define destination path in public/settings
        $destination = public_path('settings');

        // Create directory if it doesn't exist
        if (!file_exists($destination)) {
            mkdir($destination, 0755, true);
        }

        // Handle each file
        if ($request->hasFile('favicon')) {
            $favicon = $request->file('favicon');
            $faviconName = time() . '_favicon.' . $favicon->getClientOriginalExtension();
            $favicon->move($destination, $faviconName);
            $data['favicon'] = 'settings/' . $faviconName;
        }

        if ($request->hasFile('dark_logo')) {
            $dark = $request->file('dark_logo');
            $darkName = time() . '_dark.' . $dark->getClientOriginalExtension();
            $dark->move($destination, $darkName);
            $data['dark_logo'] = 'settings/' . $darkName;
        }

        if ($request->hasFile('light_logo')) {
            $light = $request->file('light_logo');
            $lightName = time() . '_light.' . $light->getClientOriginalExtension();
            $light->move($destination, $lightName);
            $data['light_logo'] = 'settings/' . $lightName;
        }

        if ($request->hasFile('company_profile')) {
            $profile = $request->file('company_profile');
            $profileName = time() . '_profile.' . $profile->getClientOriginalExtension();
            $profile->move($destination, $profileName);
            $data['company_profile'] = 'settings/' . $profileName;
        }

        Setting::updateOrCreate(['id' => 1], $data);

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
