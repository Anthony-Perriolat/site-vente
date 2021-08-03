<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class equipeController extends BaseController
{
    public function equipe()
    {
        return view('equipe');
    }
}
