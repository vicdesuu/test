<?php

namespace App\Models;

use CodeIgniter\Model;

class PrüfungsModel extends Model
{
    protected $table = 'prüfungen';
    protected $primaryKey = 'prüfung_id';
    protected $allowedFields = ['kurs_id', 'prüfungsdatum', 'prüfungsform', 'person_id', 'anmeldung_prüfung'];

    public function getKurse()
    {
        return $this->db->table('kurse')->get()->getResultArray();
    }
}
