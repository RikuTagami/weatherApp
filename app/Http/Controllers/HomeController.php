<?php

namespace App\Http\Controllers;

class HomeController {
    public function results()
    {
        return view('home', []);
    }
}
