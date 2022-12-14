<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table      = 'users';
  protected $primaryKey = 'id';

  protected $allowedFields = ['first_name', 'last_name', 'email', 'password'];
  protected $useTimestamps = true;
  protected $createdField  = 'time_created';
  protected $updatedField  = 'time_created';

  public function getUsers($id = false)
  {
    if ($id === false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }
}
