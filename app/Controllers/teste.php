<?php

namespace App\Controllers;

class teste extends BaseController
{
    public function index(): string
    {
        return view('home');
    }
}
