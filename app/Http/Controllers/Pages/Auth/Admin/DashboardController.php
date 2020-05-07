<?php

namespace App\Http\Controllers\Pages\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        $title='Administration';
        return view('uajtc.auth.admin.home', compact('title'));
    }
}
