<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index-2');
    }
    public function index3(): string
    {
        return view('index3');
    }
    public function newsletters(): string
    {
        return view('news-letters');
    }
}
