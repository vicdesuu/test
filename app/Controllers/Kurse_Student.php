<?php

namespace App\Controllers;

use App\Models\KursModel;

use App\Models\StudiengangModel;

class Kurse_Student extends BaseController
{
    public function index(): string
    {
        $data['active'] = 'courses';

        // Laden des Kurse-Models
        $kurseModel = new KursModel();

        // Hier geht man davon aus, dass die ausgewählte Studiengang-ID in einem POST- oder GET-Parameter mit dem Namen 'studiengang_id' übermittelt wird
        $studiengangId = $this->request->getVar('studiengang_id');

        // Wenn eine Studiengang-ID ausgewählt wurde
        if ($studiengangId) {
            // Kurse für den ausgewählten Studiengang abrufen
            $data['kurse'] = $kurseModel->where('studiengang_id', $studiengangId)->findAll();
        } else {
            // Wenn keine Studiengang-ID ausgewählt wurde, alle Kurse anzeigen
            $data['kurse'] = $kurseModel->findAll();
        }

        return view('pages/Kurse_Student', $data);
    }
    public function anmelden(int $kursId)
    {
        // Laden des Kurse-Models
        $kurseModel = new KursModel();

        // Aktualisieren Sie die Datenbank, um den Anmeldestatus zu ändern
        $kurseModel->update($kursId, ['anmeldung_kurs' => 1]);

        // Umleitung oder Feedback, je nach Bedarf
        return redirect()->to(base_url('Kurse_Student'))->with('success', 'Sie wurden erfolgreich für den Kurs angemeldet.');
    }

    public function abmelden(int $kursId)
    {
        // Laden des Kurse-Models
        $kurseModel = new KursModel();

        // Aktualisieren Sie die Datenbank, um den Anmeldestatus zu ändern
        $kurseModel->update($kursId, ['anmeldung_kurs' => 0]);

        // Umleitung oder Feedback, je nach Bedarf
        return redirect()->to(base_url('Meine_Kurse'))->with('success', 'Sie wurden erfolgreich für den Kurs abgemeldet.');
    }

}

