<?php

namespace App\Controllers;

use App\Models\KursModel;

use App\Models\StudiengangModel;

class Meine_Kurse extends BaseController
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
            $data['kurse'] = $kurseModel->where('studiengang_id', $studiengangId)
                ->where('anmeldung_kurs', 1) // Hier die zusätzliche Bedingung für die Anmeldung
                ->findAll();
        } else {
            // Wenn keine Studiengang-ID ausgewählt wurde, alle Kurse anzeigen
            $data['kurse'] = $kurseModel->where('anmeldung_kurs', 1) // Hier die zusätzliche Bedingung für die Anmeldung
            ->findAll();
        }

        return view('pages/Meine_Kurse', $data);
    }
}

