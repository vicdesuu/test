<?php

namespace App\Controllers;

use App\Models\PrüfungsModel;
use App\Models\KursModel;
use CodeIgniter\Controller;

class Prüfungen_Student extends Controller
{
    public function index()
    {
        $prüfungModel = new PrüfungsModel();
        $kursModel = new KursModel(); // Annahme, dass du ein Kurs-Model hast

        // Alle Prüfungen abrufen
        $prüfungen = $prüfungModel->findAll();

        // Alle Kurse abrufen und als assoziatives Array speichern
        $kurse = [];
        foreach ($kursModel->findAll() as $kurs) {
            $kurse[$kurs['kurs_id']] = $kurs['name'];
        }

        // Kursnamen den Prüfungen zuordnen
        foreach ($prüfungen as &$prüfung) {
            $prüfung['kurs_name'] = $kurse[$prüfung['kurs_id']] ?? ''; // Standardwert, falls keine Übereinstimmung gefunden wird
        }

        $data['prüfungen'] = $prüfungen;
        $data['active'] = 'exams';

        return view('pages/Prüfungen_Student', $data);
    }
    public function anmeldenPrüfung(int $prüfungId)
    {
        // Laden des Prüfungs-Models
        $prüfungModel = new PrüfungsModel();

        // Aktualisieren Sie die Datenbank, um den Anmeldestatus zu ändern
        $prüfungModel->update($prüfungId, ['anmeldung_prüfung' => 1]);

        // Umleitung oder Feedback, je nach Bedarf
        return redirect()->to(base_url('Prüfungen_Student'))->with('success', 'Sie wurden erfolgreich für die Prüfung angemeldet.');
    }

    public function abmeldenPrüfung(int $prüfungId)
    {
        // Laden des Prüfungs-Models
        $prüfungModel = new PrüfungsModel();

        // Aktualisieren Sie die Datenbank, um den Anmeldestatus zu ändern
        $prüfungModel->update($prüfungId, ['anmeldung_prüfung' => 0]);

        // Umleitung oder Feedback, je nach Bedarf
        return redirect()->to(base_url('Meine_Prüfungen'))->with('success', 'Sie wurden erfolgreich für die Prüfung abgemeldet.');
    }

}
