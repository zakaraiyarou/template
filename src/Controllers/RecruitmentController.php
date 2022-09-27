<?php

namespace App\Controllers;

use Slim\Views\Twig;

class RecruitmentController
{
  public function __construct(private Twig $twig)
  {
  }
  public function recruitment($response)
  {
    return $this->twig->render($response, 'recruitment.html');
  }
}
