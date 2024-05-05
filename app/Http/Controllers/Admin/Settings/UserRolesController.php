<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class UserRolesController extends Controller
{
    public function standard()
    {
        $userLevel = 'standard';
        $permissions = Setting::where('name', $userLevel)->first();
        return view("content.settings.user_roles", compact("permissions", "userLevel"));
    }

    public function premium()
    {
        $userLevel = 'premium';
        $permissions = Setting::where('name', $userLevel)->first();
        return view("content.settings.user_roles", compact("permissions", "userLevel"));
    }

    public function vip()
    {
        $userLevel = 'vip';
        $permissions = Setting::where('name', $userLevel)->first();
        return view("content.settings.user_roles", compact("permissions", "userLevel"));
    }

    public function update(Request $request)
    {
        $key = $request->input('key');
        $value = $request->input('value');
        $userLevel = $request->input('userLevel');
        $valueType = $request->input('valueType');
       
        $permission = Setting::where('name', $userLevel)->first();
        if ($permission) {
            $permissionValue = $permission->getAttribute('value');

            $permissionValue[$key] = $valueType == 'boolean' ? filter_var($value, FILTER_VALIDATE_BOOLEAN) : ($valueType == 'int' ? (int) $value : ($valueType == 'float' ? (float) $value : $value));
            $permission->setAttribute('value', $permissionValue);
            $permission->save();
        }

        return response()->json(['status' => 'success']);
    }

    public function fanpage()
    {
        return view("content.settings.fanpage");
    }
}
