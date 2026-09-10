<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index-2');
    }
       public function about_us(): string
    {
        return view('about_us');
    }
       public function history(): string
    {
        return view('history');
    }
       public function diocean(): string
    {
        return view('diocean');
    }
    public function council(): string
    {
        return view('council');
    }
        public function college_commities(): string
    {
        return view('college_commities');
    }
    
    public function commities(): string
    {
        return view('commities');
    }
    public function tribunal(): string
    {
        return view('tribunal');
    }
       public function commisions(): string
    {
        return view('commisions');
    }
       public function deaneries(): string
    {
        return view('deaneries');
    }
    public function seminarians(): string
    {
        return view('seminarians');
    }
    public function education(): string
    {
        return view('education');
    }
    public function institutions(): string
    {
        return view('institutions');
    }

     public function diocesanpriests(): string
    {
        return view('diocesanpriests');
    }
       public function necrology(): string
    {
        return view('necrology');
    }
        public function parishes(): string
    {
        return view('parishes');
    }
       public function dioceanshrine(): string
    {
        return view('dioceanshrine');
    }
     
    public function bishop()
    {
        return view('bishop');
    }

    public function institution()
    {
        return view('institution');
    }

    public function eduactionalinstitution()
    {
        return view('eduactionalinstitution');
    }

    public function dioceanpreiest()
    {
        return view('dioceanpreiest');
    }

    public function religiouspreiest()
    {
        return view('religiouspreiest');
    }

    public function birthdaycalender()
    {
        return view('birthdaycalender');
    }

    public function news()
    {
        return view('news');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function vedio()
    {
        return view('vedio');
    }

    public function songs()
    {
        return view('songs');
    }

    public function newsletters()
    {
        return view('newsletters');
    }

    public function feedback()
    {
        return view('feedback');
    }

    public function contact()
    {
        return view('contact');
    }
    }

