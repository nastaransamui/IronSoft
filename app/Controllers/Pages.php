<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about()
    {
        return view('pages/about');
    }

    public function career()
    {
        return view('pages/career');
    }

}