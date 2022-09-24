<?php

namespace App\Controllers;

use App\Models\FileModel;
use App\Models\FileViewModel;
use App\Models\UserModel;
use CodeIgniter\Config\Services;


class Home extends BaseController
{
    protected $helpers = ['form'];

    public function index($page = 'home_page')
    {
        if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $userModel = model(UserModel::class);
        $fileModel = model(FileModel::class);

        $session = session();
        $data = [
            'title' => 'Home',
            'session' => $session,
            'users' => $userModel->getUsers(),
            'files' => $fileModel->getFiles()
        ];
        return view('templates/header', $data) . view('home_page');
    }

    public function uploadFile()
    {
        $data['title'] = ucfirst('File Upload');
        $session = session();


        if (strtolower($this->request->getMethod()) !== 'post') {
            return 'Failed';
        }

        $rules = [
            'fileInput' => 'uploaded[fileInput]',
        ];

        if (!$this->validate($rules)) {
            return 'Failed';
        }

        $model = model(FileModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate($rules)) {

            $file = $this->request->getFile('fileInput');
            $fileName = $file->getName();
            $newName = $file->getRandomName();
            $file->move('uploads/' . $session->get('id'), $newName);
            $fileLocation = 'uploads/' . $session->get('id') . '/' . $newName;

            $model->save([
                'file_name' => $fileName,
                'uploader_id'  => $session->get('id'),
                'file_size'  => $file->getSizeByUnit('mb'),
                'location'  => $fileLocation
            ]);

            return redirect()->to('/');
        }
    }
}
