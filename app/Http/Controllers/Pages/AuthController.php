<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(User $user = null)
    {
        if ($user==null) {
            $user=Auth::user();
        }
        $title="PROFILE";
        return view('uajtc.auth.profile', compact('title', 'user'));
    }
}
