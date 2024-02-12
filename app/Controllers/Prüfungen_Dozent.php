<?php

namespace App\Controllers;

use App\Models\PrüfungsModel;
use App\Models\KursModel;
use CodeIgniter\Controller;

class Prüfungen_Dozent extends Controller // Hier von BaseController auf Controller geändert
{
    public function index()
    {
        $prüfungModel = new PrüfungsModel();
        $data['prüfungen'] = $prüfungModel->findAll();
        $data['kurse'] = $prüfungModel->getKurse(); // Hinzugefügt
        // Hinzufügen der Kursnamen zu den Prüfungsdaten
        foreach ($data['prüfungen'] as &$prüfung) {
            foreach ($data['kurse'] as $kurs) {
                if ($prüfung['kurs_id'] == $kurs['kurs_id']) {
                    $prüfung['kurs_name'] = $kurs['name'];
                    break;
                }
            }
        }
        unset($prüfung); // Sicherstellen, dass die Referenz aufgelöst wird
        $data['active'] = 'exams';
        return view('pages/Prüfungen_Dozent', $data);
    }

    public function save()
    {
        // Überprüfe, ob ein POST-Request gesendet wurde
        if ($this->request->getMethod() === 'post') {
            // Validiere die Eingabedaten
            $validation = \Config\Services::validation();
            $validation->setRules([
                'kurs_id' => 'required',
                'prüfungsdatum' => 'required',
                'prüfungsform' => 'required',
                'person_id' => 'required',
            ]);

            if ($validation->withRequest($this->request)->run()) {
                $prüfungsModel = new PrüfungsModel();
                $prüfungsData = [
                    'kurs_id' => $this->request->getPost('kurs_id'),
                    'prüfungsdatum' => $this->request->getPost('prüfungsdatum'),
                    'prüfungsform' => $this->request->getPost('prüfungsform'),
                    'person_id' => $this->request->getPost('person_id'),
                ];
                $prüfungsModel->insert($prüfungsData);

                // Erfolgsmeldung oder Weiterleitung
                return redirect()->to(base_url('Prüfungen_Dozent'))->with('success', 'Prüfung erfolgreich erstellt.');
            } else {
                // Fehler bei der Validierung, zeige die Fehlermeldung
                return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            }
        }

        // Sollte nur für POST-Anfragen aufgerufen werden, leite daher auf die Indexseite weiter
        return redirect()->to(base_url('Prüfungen_Dozent'));
    }
}
