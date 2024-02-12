<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonenModell extends Model
{
    protected $table      = 'personen';
    protected $primaryKey = 'PersonenID';
    protected $allowedFields = ['Matrikelnummer', 'Vorname', 'Nachname', 'Email', 'Passwort', 'Studiengang', 'Fachsemester', 'Adresse', 'Telefonnummer'];
}