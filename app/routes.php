
<?php

use App\Controllers\RecruitmentController;
use App\Controllers\SiteController;
use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
  $app->group('/', function (RouteCollectorProxy $group) {
    $group->get('', [SiteController::class, 'index']);
    $group->post('', [SiteController::class, 'index']);
  });
  $app->get('/logout', [SiteController::class, 'logout']);
  $app->get('/dashboard', [SiteController::class, 'dashboard']);
  $app->get('/dashboard/{name}', [SiteController::class, 'dashboard']);
  $app->put('/dashboard', [SiteController::class, 'dashboard']);
  $app->map(['GET', 'POST'], '/login', [SiteController::class, 'login']);

  $app->get('/recruitment', [RecruitmentController::class, 'recruitment']);
};
