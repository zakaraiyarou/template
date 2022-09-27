<?php

namespace App\Exceptions;

use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\HttpNotFoundException;
use Slim\Psr7\Response;
use Slim\Views\Twig;

class RouteNotFoundException extends HttpNotFoundException
{
  public function __construct(private Response $response, private Twig $view)
  {
  }

  public function errorHandler()
  {
    if ($this->response->withStatus(404)) {
      return $this->view->render($this->response, '404.html');
    }
  }
}
