<?php

namespace App\Controllers;

use Slim\Views\Twig;

class Controller
{
  public function __construct(protected Twig $view)
  {
  }

  public function edit()
  {
    if (isset($_GET['edit'])) {
      var_dump($_GET['edit']);
    }
  }
  public function update()
  {
  }
  public function delete()
  {
  }
  public function submit()
  {
  }
}
