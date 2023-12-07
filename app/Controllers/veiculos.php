<?php

namespace App\Controllers;

class veiculos extends BaseController
{
    public function index(): string
    {
        return view('veiculos');
    }
}
