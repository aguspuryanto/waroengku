<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        // if (session()->get('logged_in')) {
        //     return redirect()->to('/dashboard');
        // } else {
        //     return redirect()->to('/login');
        // }
    }
}
