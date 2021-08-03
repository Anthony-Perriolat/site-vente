<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class contactController extends BaseController
{
    public function contact()
    {
        return view('contact');
    }
}
