<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'content', 'date_published', 'creator'];

    protected $useAutoIncrement = true;
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';

    // Optional: Define validation rules for news creation
    protected $validationRules = [
        'title' => 'required|min_length[3]|max_length[255]',
        'content' => 'required',
    ];

    public function getNews()
    {
        return $this->orderBy('created_at', 'desc')->findAll();
    }
}