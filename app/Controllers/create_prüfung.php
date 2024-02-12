<?php

namespace App\Controllers;

use App\Models\KursModel;

class create_prüfung extends BaseController
{
    public function index(): string
    {
        $kursModel = new KursModel();
        $data['title'] = 'Prüfung Erstellen';
        $data['kurse'] = $kursModel->findAll();
        return view('pages/create_prüfung', $data);
    }
}
