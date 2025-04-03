<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;




class SettingsController extends Controller
{
    public function index()
    {
        return view('admin.settings', [
            'title' => 'Settings',
            'breadcrumbs' => [
                trans('backpack::crud.admin') => backpack_url('dashboard'),
                'Settings' => false,
            ],
            'page' => 'resources/views/admin/settings.blade.php',
            'controller' => 'app/Http/Controllers/Admin/SettingsController.php',
            'site_settings' => $this->get(),
        ]);
    }

    public function save(Request $request)
    {
        Storage::disk('local')->put('site_settings.json', json_encode($request->except('_token')));
        return redirect()->back();
    }

    static public function get()
    {
        return json_decode(Storage::disk('local')->get('site_settings.json'), true);
    }
}
