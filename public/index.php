<?php

use DI\Bridge\Slim\Bridge as SlimApp;
use DI\ContainerBuilder;
use Dotenv\Dotenv;

if (session_status() !== PHP_SESSION_ACTIVE && !headers_sent()) {
  session_start();
}

require_once __DIR__ . '/../vendor/autoload.php';


$env = Dotenv::createImmutable(base_path('/'));
$env->load();

$containerBuilder = new ContainerBuilder();

$settings = require_once app_path('/settings.php');
$settings($containerBuilder);

$dependencies = require_once app_path('/dependencies.php');
$dependencies($containerBuilder);

$container = $containerBuilder->build();

$app = SlimApp::create($container);

$twig = require_once app_path('/twig.php');
$twig($app);

$routes = require_once app_path('/routes.php');
$routes($app);

$middleware = require_once app_path('/middleware.php');
$middleware($app);

$app->run();
