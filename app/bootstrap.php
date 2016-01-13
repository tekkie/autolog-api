<?php
require_once(__DIR__ . '/../vendor/autoload.php');

use Silex\Provider\MonologServiceProvider;

$app = new Silex\Application;
$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__ . '/../logs/dev.log'
));

$app
    ->match('/', function () use ($app) {
        $app['monolog']->addInfo('Logging example in the status route');

        return 'Up and running.';
    })
    ->method('GET|POST');

/* [START] here we hardcode happy flow functionality for user stories */
$app->get('/vehicles', function () use ($app) {
  return('[{"id":123, "name": "Pansy"}]');
});
$app->post('/vehicles', function () use ($app) {
  return '{"id":123, "name": "Pansy"}';
});
$app->put('/vehicles/{id}', function ($id) use ($app) {
  return sprintf(
    '{"id":%s, "name": "Pansy updated"}',
    $id
  );
});
/* [ END ] here we hardcode happy flow functionality for user stories */

return $app;
