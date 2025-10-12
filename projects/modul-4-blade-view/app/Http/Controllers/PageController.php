<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function admin()
    {
        $role = 'Admin';
        $username = 'Parker Admin';
        return view('admin.dashboard', compact('role', 'username'));
    }

    public function user()
    {
        $role = 'user';
        $username = 'deva user';
        return view('user.dashboard', compact('role', 'username'));
    }
}