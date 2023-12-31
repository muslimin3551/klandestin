<?php

namespace App\Models;

use CodeIgniter\Model;

class AnonymousModel extends Model
{
    protected $table      = 'tbl_anonymous';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['user_id', 'description', 'image', 'is_published', 'created_at', 'updated_at', 'is_deleted'];
}
