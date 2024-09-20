<?php

/*

   ______     ______    ______     ______     ______     ______    
  /\  ___\   /\__  _\  /\  ___\   /\  == \   /\  ___\   /\  __ \   
  \ \___  \  \/_/\ \/  \ \  __\   \ \  __<   \ \  __\   \ \ \/\ \  
   \/\_____\    \ \_\   \ \_____\  \ \_\ \_\  \ \_____\  \ \_____\ 
    \/_____/     \/_/    \/_____/   \/_/ /_/   \/_____/   \/_____/ 
               

   2.0.0 - https://github.com/jyoungblood/stereo

*/

require __DIR__ . '/../vendor/autoload.php';

\Dotenv\Dotenv::createImmutable(__DIR__ . '/../')->load();

$app = \Slim\Factory\AppFactory::create();
$app->addBodyParsingMiddleware();

require 'settings.php';


$GLOBALS['database'] = \VPHP\db::init([ 'host' => $_ENV['DB_HOST'], 'name' => $_ENV['DB_NAME'], 'user' => $_ENV['DB_USER'], 'password' => $_ENV['DB_PASSWORD'], 'port' => isset($_ENV['DB_PORT']) ? $_ENV['DB_PORT'] : null, 'driver' => isset($_ENV['DB_DRIVER']) ? $_ENV['DB_DRIVER'] : null, 'charset' => isset($_ENV['DB_CHARSET']) ? $_ENV['DB_CHARSET'] : null ]);

$errorMiddleware = isset($_ENV['SITE_MODE']) && $_ENV['SITE_MODE'] == 'development' ? $app->addErrorMiddleware(true, true, true) : $app->addErrorMiddleware(false, false, false);

$errorMiddleware->setErrorHandler(\Slim\Exception\HttpNotFoundException::class, function ( \Psr\Http\Message\ServerRequestInterface $request, \Throwable $exception, bool $displayErrorDetails, bool $logErrors, bool $logErrorDetails ) {

  return \Slime\render::blade($request, new \Slim\Psr7\Response(), [
    'template' => 'error',
    'data' => [
      'title' => '404 - NOT FOUND',
      'status_code' => 404,
      'error_message' => 'This page could not be found.'
    ]
  ], 404);

});





$finder = new \Symfony\Component\Finder\Finder();

foreach ($finder->files()->in(__DIR__ . '/routes')->name('*.php') as $file) {
  require_once $file->getRealPath();
}



return $app;