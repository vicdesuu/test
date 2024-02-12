<?php

namespace App\Models;

use CodeIgniter\Model;

class KursModel extends Model
{
    protected $table = 'kurse';
    protected $primaryKey = 'kurs_id';

    protected $allowedFields = ['name', 'description', 'credit_points', 'person_id', 'studiengang', 'anmeldung_kurs'];

    public function getKurseByPersonenID($personID)
    {
        return $this->where('person_id', $personID)->findAll();
    }

    public function createKurs($data)
    {
        $kursData = [
            'name' => $data['name'],
            'description' => $data['description'],
            'credit_points' => $data['credit_points'],
            'person_id' => $data['person_id'],
            'studiengang' => $data['studiengang'], // Hier den Studiengang hinzufügen
            'anmeldung' => 0 // Standardmäßig auf 0 setzen
        ];

        $this->insert($kursData);
    }

    public function anmeldenKurs($kursId)
    {
        // Lade den Kurs anhand der ID
        $kurs = $this->find($kursId);

        if ($kurs) {
            // Aktualisiere den Anmeldestatus auf 1
            $this->update($kursId, ['anmeldung' => 1]);
            return true; // Erfolgreich aktualisiert
        } else {
            return false; // Kurs nicht gefunden
        }
    }
}
