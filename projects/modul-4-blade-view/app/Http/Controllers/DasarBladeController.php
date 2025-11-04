<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DasarBladeController extends Controller
{
    public function showData(){
        $name = 'bunga';
        $fruits = ['Apple', 'Banana', 'Cherry'];
        $user = [
            'name' => 'bunga',
            'email' => 'bunga@pnl.ac.id',
            'is_active' => true,
        ];
        $product = (object) [
            'id' => 1,
            'name' => 'Laptop',
            'price' => 12000000
        ];
        return view('dasar', compact('name', 'fruits', 'user', 'product'));
    }
}
