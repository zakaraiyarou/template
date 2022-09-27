<?php

use DI\ContainerBuilder;
use Slim\Views\Twig;

return function (ContainerBuilder $containerBuilder) {
  $containerBuilder->addDefinitions([
    Twig::class => function () {
      $twig = Twig::create(base_path('/views'), ['cache' => false]);
      $twig->getEnvironment()->addGlobal('session', $_SESSION);
      return $twig;
    },
  ]);
};
