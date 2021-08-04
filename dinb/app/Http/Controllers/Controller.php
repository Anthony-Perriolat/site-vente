<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function home()
    {
        return view('home');
    }
    public function realisation()
    {
        return view('realisation');
    }
    public function equipe()
    {
        return view('equipe');
    }
    public function contact()
    {
        return view('contact');
    }
}
