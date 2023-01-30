<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Page extends BaseController
{
    public function index()
    {
        echo view('index');
    }
    public function about()
    {
        echo view('about');
    }

    public function contact()
    {
        echo view('contact');
    }

    public function faqs()
    {
        echo view('faqs');
    }
}
