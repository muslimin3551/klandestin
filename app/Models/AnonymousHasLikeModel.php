<?php

namespace App\Models;

use CodeIgniter\Model;

class AnonymousHasLikeModel extends Model
{
    protected $table      = 'tbl_anonymous_has_like';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['user_id', 'anonymous_id', 'created_at', 'updated_at', 'is_deleted'];
}
