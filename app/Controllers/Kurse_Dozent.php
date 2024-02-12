<?php

namespace App\Controllers;

use App\Models\KursModel;

class Kurse_Dozent extends BaseController
{
    public function index()
    {
        $kursModel = new KursModel();
        $data['kurse'] = $kursModel->getKurseByPersonenID(2); // Hier ersetze '2' durch die tatsächliche Personen-ID des Dozenten
        $data['active'] = 'courses';
        return view('pages/Kurse_Dozent', $data);
    }

    public function save()
    {
        // Überprüfe, ob ein POST-Request gesendet wurde
        if ($this->request->getMethod() === 'post') {
            // Validiere die Eingabedaten
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required',
                'description' => 'required',
                'credit_points' => 'required|numeric',
                'studiengang' => 'required' // Hier die Validierungsregel für den Studiengang hinzufügen
            ]);

            if ($validation->withRequest($this->request)->run()) {
                $kursModel = new KursModel();
                $kursData = [
                    'name' => $this->request->getPost('name'),
                    'description' => $this->request->getPost('description'),
                    'credit_points' => $this->request->getPost('credit_points'),
                    'person_id' => 2, // Hier ersetze '2' durch die tatsächliche Personen-ID des Dozenten
                    'studiengang' => $this->request->getPost('studiengang') // Hier den Studiengang hinzufügen
                ];
                $kursModel->createKurs($kursData);

                // Erfolgsmeldung oder Weiterleitung
                return redirect()->to(base_url('Kurse_Dozent'))->with('success', 'Kurs erfolgreich erstellt.');
            } else {
                // Fehler bei der Validierung, zeige die Fehlermeldung
                return redirect()->back()->withInput()->with('errors', $validation->getErrors());
            }
        }

        // Sollte nur für POST-Anfragen aufgerufen werden, leite daher auf die Indexseite weiter
        return redirect()->to(base_url('Kurse_Dozent'));
    }
}
