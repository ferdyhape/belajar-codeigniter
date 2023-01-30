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
        echo "about page";
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "Faqs page";
    }
}
