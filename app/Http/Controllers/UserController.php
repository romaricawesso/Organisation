<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function accueil()
    {
        return view('frontend.accueil');
    }

    public function apropos()
    {
        return view('frontend.apropos');
    }

    public function evenement()
    {
        return view('frontend.events');
    }

    public function contact()
    {
        return view('frontend.contacts');
    }

    public function actualite()
    {
        return view('frontend.actualite');
    }

    public function projet()
    {
        return view('frontend.projet');
    }
}
