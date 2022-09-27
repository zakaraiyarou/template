<?php

use DI\ContainerBuilder;

return function (ContainerBuilder $container) {
  $container->addDefinitions([
    'settings' => [
      'displayErrorDetails' => true,
      'logErrors' => true,
      'logErrorDetails' => true,
    ],
  ]);
};
