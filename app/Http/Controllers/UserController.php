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

    public function don()
    {
        return view('frontend.don');
    }

    public function educationDetail()
    {
        return view('components.educationDetail');
    }

    public function santeDetail()
    {
        return view('components.santeDetail');
    }

    public function nutritionDetail()
    {
        return view('components.nutritionDetail');
    }

    public function eventDetail1()
    {
        return view('components.eventsdetails1');
    }

    public function eventDetail2()
    {
        return view('components.eventsdetails2');
    }

    public function eventDetail3()
    {
        return view('components.eventsdetails3');
    }

}
