<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class homeController extends BaseController
{
    public function home()
    {
        return view('home');
    }
}
