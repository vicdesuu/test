<?php

namespace App\Controllers;

use App\Models\KursModel;
use App\Models\PrüfungsModel;

class Meine_Prüfungen extends BaseController // Fehlender "extends BaseController" hinzugefügt
{
    public function index (): string // Hinzufügen der öffnenden und schließenden Klammern für die Methode
    {
        $prüfungModel = new PrüfungsModel();
        $kursModel = new KursModel(); // Annahme, dass du ein Kurs-Model hast

        // Alle Prüfungen mit Anmeldewert 1 abrufen
        $prüfungen = $prüfungModel->where('anmeldung_prüfung', 1)->findAll();

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

        return view('pages/Meine_Prüfungen', $data);
    }
}
