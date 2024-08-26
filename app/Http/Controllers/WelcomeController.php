<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    /**
     * Method to render the welcome blade page
     */
    public function welcome()
    {
        return view('welcome');
    }
}
