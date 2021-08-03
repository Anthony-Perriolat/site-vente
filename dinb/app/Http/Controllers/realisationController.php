<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class realisationController extends BaseController
{
    public function realisation()
    {
        return view('realisation');
    }
}
