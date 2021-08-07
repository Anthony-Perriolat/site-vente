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
    public function item1()
    {
        return view('item1');
    }
    public function item2()
    {
        return view('item2');
    }
    public function item3()
    {
        return view('item3');
    }
    public function item4()
    {
        return view('item4');
    }
}
