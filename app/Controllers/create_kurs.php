<?php

namespace App\Controllers;

class create_kurs extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Kurs Erstellen';
        return view('pages/create_kurs',$data);
    }
}

