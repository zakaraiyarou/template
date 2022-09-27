<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

class SiteController extends Controller
{

  public function index(Response $response)
  {
    return $response->withHeader('Location', '/login')->withStatus(301);
  }

  public function logout($response)
  {
    session_unset();
    session_destroy();
    return $response->withHeader('Location', '/login')->withStatus(301);
  }

  public function dashboard(Response $response)
  {
    $this->edit();
    $data = [
      (object) [
        'id' => 1,
        'firstname' => 'Jane',
        'lastname' => 'Doe'
      ],
      (object) [
        'id' => 2,
        'firstname' => 'John',
        'lastname' => 'Doe'
      ],
      (object) [
        'id' => 3,
        'firstname' => 'Jack',
        'lastname' => 'Doe'
      ]
    ];

    return $this->view->render($response, 'dashboard.html', ['users' => $data]);
  }

  public function login(Response $response, Request $request, App $app)
  {
    if (isset($_POST['login'])) {
      $_SESSION['account_id'] = 1;
      $_SESSION['name'] = 'John Doe';

      return $response->withHeader('Location', '/dashboard?status=successful')->withStatus(301);
    }

    if (!empty($_SESSION)) {
      return $response->withHeader('Location', '/dashboard')->withStatus(301);
    }

    return $this->view->render($response, 'login.html');
  }
}
