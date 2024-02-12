<?php

namespace App\Controllers;

class Profil_Dozent extends BaseController
{
    public function index(): string
    {
        $data['active'] = 'profile';
        return view('pages/Profil_Dozent',$data);
    }
}

