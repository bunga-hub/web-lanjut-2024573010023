<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class UIController extends Controller
{
   public function home(Request $request){

    $theme = session('theme', 'light');
    $alertMessage = 'Selamat datang di laravel UI Integrated Demo!';
    $features = [

        'Partial Views',
        'Blade Component',
        'Theme Switching',
        'Boostrap 5',
        'responsive Design'

    ];

    return view('home', compact('theme', 'alertMessage', 'features'));
   }


    
    public function about(Request $request) {
    $theme = session('theme', 'light');
    $alertMessage = 'Halaman ini menggunakan Partial Views!'; 
    $team = [
        ['name' => 'Bunga', 'role' => 'Pretty Girl'], 
        ['name' => 'Maisha', 'role' => 'Owner Lumo'],
        ['name' => 'Deva', 'role' => 'Typo Girl'] 
    ];

    return view('about', compact('theme', 'alertMessage', 'team'));
}

    public function contact(Request $request)
{
    $theme = session('theme', 'light');
    $departments = [
        'Technical Support',
        'Sales',
        'Billing',
        'General Inquiry',

    ];

    return view('contact', compact('theme', 'departments'));
}

    public function profile(Request $request)
    {
        $theme = session('theme', 'light');
        $user = [
            'name' => 'Bunga Alfa Zahrah',
            'email' => 'bungaalfazahrah@gmail.com',
            'join-date' => '2024-01-25',
            'preferences' => ['Email Notification', 'Dark mode', 'Newsletter']
        ];

     return view ('profile', compact('theme', 'user'));

    }

    public function switchTheme(Request $request, $theme)
    {
        if (in_array($theme, ['light', 'dark'])){
                session(['theme' => $theme]);
        }
        return back();
    }

    
}
    
  
    