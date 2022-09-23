<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index($page = 'home_page')
    {
        if (!is_file(APPPATH . 'Views/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $session = session();
        $data['title'] = 'Home';
        $data['session'] = $session;
        return view('templates/header', $data) . view('home_page');
    }
}
