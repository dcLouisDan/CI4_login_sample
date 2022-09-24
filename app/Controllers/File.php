<?php

namespace App\Controllers;

class File extends BaseController
{
  public function index()
  {
  }

  public function uploadFile()
  {
    $file = $this->request->getFile('fileInput');

    echo $file->getBasename();
    // Get last modified time
    echo $file->getMTime();
    // Get the true real path
    echo $file->getRealPath();

    $file->move(WRITEPATH . 'uploads', 'upload1.jpg');
  }
}
