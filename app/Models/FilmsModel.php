<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmsModel extends Model
{
    protected $table      = 'films';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['title', 'category', 'producer', 'director', 'writer', 'production', 'content', 'thumbnail'];
}
