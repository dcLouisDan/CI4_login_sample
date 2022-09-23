<?php

namespace App\Controllers;

use App\Models\UserModel;
use Config\Services;

class Auth extends BaseController
{
  protected $helpers = ['form'];

  public function index($page = 'Signup')
  {
    $data['title'] = ucfirst($page);
    return view('templates/header', $data) .
      view('auth/login', $data);
  }

  public function signup($page = 'Signup')
  {
    $data['title'] = ucfirst($page);

    if (strtolower($this->request->getMethod()) !== 'post') {
      return view('templates/header', $data) .
        view('auth/login', [
          'validation' => Services::validation(),
        ]);
    }

    $rules = [
      'firstName' => 'required',
      'lastName' => 'required',
      'email' => 'required|valid_email|is_unique[users.email]',
      'password' => 'required',
      'repeatPassword' => 'required|matches[password]',
    ];

    if (!$this->validate($rules)) {
      return view('templates/header', $data) .
        view('auth/login', [
          'validation' => $this->validator,
        ]);
    }

    $model = model(UserModel::class);

    if ($this->request->getMethod() === 'post' && $this->validate($rules)) {
      $model->save([
        'first_name' => $this->request->getPost('firstName'),
        'last_name'  => $this->request->getPost('lastName'),
        'email'  => $this->request->getPost('email'),
        'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
      ]);

      return redirect('success');
    }
  }

  public function success($page = 'success')
  {
    $data['title'] = ucfirst($page);
    return view('templates/header', $data) .
      view('auth/success', $data);
  }
}
