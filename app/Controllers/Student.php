<?php

namespace App\Controllers;

use App\Models\NewsModel;

class Student extends BaseController
{
    public function index()
    {
        $data['active'] = 'home';

        $newsModel = new NewsModel();
        $data['news'] = $newsModel->getNews();

        return view('pages/Student', $data);
    }
}