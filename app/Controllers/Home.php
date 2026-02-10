<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $jsonPath = APPPATH . 'Data/home.json';
        if (!file_exists($jsonPath)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Home data not found');
        }

        $jsonData = file_get_contents($jsonPath);
        $data = json_decode($jsonData, true);

        return view('home', $data);
    }
}
