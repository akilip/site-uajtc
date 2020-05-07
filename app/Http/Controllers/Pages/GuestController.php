<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home()
    {
        $title="UAJTC officiel";
        return view('uajtc.home', compact('title'));
    }

    public function about()
    {
        $title="A Propos de nous";
        return view('uajtc.about', compact('title'));
    }
}
