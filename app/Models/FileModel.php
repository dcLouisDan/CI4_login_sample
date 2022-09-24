<?php

namespace App\Models;

use CodeIgniter\Model;

class FileModel extends Model
{
  protected $table      = 'files';
  protected $primaryKey = 'id';

  protected $allowedFields = ['file_name', 'uploader_id', 'file_size', 'location'];
  protected $useTimestamps = true;
  protected $createdField  = 'date_uploaded';
  protected $updatedField  = 'date_uploaded';

  public function getFiles($id = false)
  {
    $this->table = 'files_with_user';
    if ($id === false) {
      return $this->findAll();
    }

    return $this->where(['id' => $id])->first();
  }
}
