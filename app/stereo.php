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


// $GLOBALS['database'] = isset($_ENV['DB_HOST']) ? \VPHP\db::init([ 'host' => $_ENV['DB_HOST'], 'name' => $_ENV['DB_NAME'], 'user' => $_ENV['DB_USER'], 'password' => $_ENV['DB_PASSWORD'] ]) : false;

if (isset($_ENV['DB_HOST'])){
  $db_init = [ 'host' => $_ENV['DB_HOST'], 'name' => $_ENV['DB_NAME'], 'user' => $_ENV['DB_USER'], 'password' => $_ENV['DB_PASSWORD'] ];
  if (isset($_ENV['DB_PORT'])){
    $db_init['port'] = $_ENV['DB_PORT'];
  }
  if (isset($_ENV['DB_DRIVER'])){
    $db_init['driver'] = $_ENV['DB_DRIVER'];
  }
  if (isset($_ENV['DB_CHARSET'])){
    $db_init['charset'] = $_ENV['DB_CHARSET'];
  }
  $GLOBALS['database'] = \VPHP\db::init($db_init);
}


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

// fixit need a faster way to do this
  // fixit include subdirectories
foreach (glob(__DIR__ . '/routes/*.php') as $file) {
  require $file;
}


return $app;