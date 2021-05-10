<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'username';
    protected $useTimestamps = true;

    public function getUserRule($rul=false)
    {

    }

}