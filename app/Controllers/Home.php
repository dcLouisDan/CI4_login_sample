<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index($page = 'home_page')
    {
        if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $userModel = model(UserModel::class);

        $session = session();
        $data = [
            'title' => 'Home',
            'session' => $session,
            'users' => $userModel->getUsers(),
        ];
        return view('templates/header', $data) . view('home_page');
    }
}
