<?php

namespace App\Controllers;

use App\Models\PersonenModell;

class Profil_Student extends BaseController
{
    public function index()
    {
        $data['active'] = 'profile';
        return view('pages/Profil_Student',$data);
    }
}
