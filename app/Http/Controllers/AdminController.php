<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;


class AdminController extends Controller
{
    function panel() {
        $data = [
            'dcItems' => config('extradb.dcitems'),
            'footerLinks' => config('extradb.footerlinks'),
            'comics' => Comic::all()
        ];
        return view('admin.panel', $data);
    }
}
