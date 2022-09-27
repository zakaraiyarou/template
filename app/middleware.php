<?php

use Slim\App;
use Slim\Exception\HttpNotFoundException;
use App\Exceptions\RouteNotFoundException;

return function (App $app) {
  $settings = $app->getContainer()->get('settings');

  $errorMiddleware = $app->addErrorMiddleware(
    $settings['displayErrorDetails'],
    $settings['logErrors'],
    $settings['logErrorDetails'],
  );

  $errorMiddleware->setErrorHandler(
    HttpNotFoundException::class,
    [RouteNotFoundException::class, 'errorHandler']
  );
};
