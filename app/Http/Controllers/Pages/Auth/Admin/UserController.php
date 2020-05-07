<?php

namespace App\Http\Controllers\Pages\Auth\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var string
     */
    private $users;

    public function index()
    {

        $users=($this->allUsers()::paginate(5));
        $title='Membres';
        return view('uajtc.auth.admin.users', compact('title', 'users'));
    }

    private function allUsers()
    {
        if ($this->users==null) {
            $this->users= User::class;
        }
        return $this->users;
    }
}
