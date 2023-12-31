<?php

namespace App\Models;

use CodeIgniter\Model;

class AnonymousHasCommentModel extends Model
{
    protected $table      = 'tbl_anonymous_has_comment';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['user_id', 'anonymous_id', 'description', 'created_at', 'updated_at', 'is_deleted'];
}
