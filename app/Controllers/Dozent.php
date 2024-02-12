<?php

namespace App\Controllers;

use App\Models\NewsModel;

class Dozent extends BaseController
{
    public function index()
    {
        $newsModel = new NewsModel();

        $data['news'] = $newsModel->getNews();

        $data['active'] = 'home';

        $data['title'] = 'Home';

        return view('pages/Dozent', $data);
    }
    public function addNews()
    {
        // Formulardaten erhalten
        $title = $this->request->getPost('title');
        $content = $this->request->getPost('content');
        $creator = 'Prof. Dr. Andreas Becker'; // Setze den Ersteller der Nachricht

        // Neue Nachricht in die Datenbank einfügen
        $newsModel = new NewsModel();
        $newsModel->insert([
            'title' => $title,
            'content' => $content,
            'creator' => $creator // Füge den Ersteller der Nachricht hinzu
        ]);

        // Erfolgsmeldung setzen und zur Indexseite zurückkehren
        return redirect()->to(base_url('Dozent'))->with('success', 'Nachricht erfolgreich erstellt.');
    }
}
