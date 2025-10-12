<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function show()
    {
        $isLoggedIn = true;
        $users = [
            ['name' => 'Bunga', 'role' => 'admin'],
            ['name' => 'Deva', 'role' => 'editor'],
            ['name' => 'Maisha', 'role' => 'subscriber'],

        ];
        $products = []; //Simulasi array kosong untuk @forelse
        $profile = [
            'name' => 'Bunga',
            'email' => 'Bunga@pnl.ac.id'
        ];
        $status = 'active';

        return view ('logic', compact('isLoggedIn', 'users', 'products', 'profile', 'status'));
    }
}