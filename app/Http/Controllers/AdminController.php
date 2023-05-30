<?php

namespace App\Http\Controllers;

use App\Models\Comic;

class AdminController extends Controller
{
    public function panel()
    {
        $data = [
            'dcItems' => config('extradb.dcitems'),
            'footerLinks' => config('extradb.footerlinks'),
            'comics' => Comic::all(),
        ];

        return view('admin.panel', $data);
    }
}
