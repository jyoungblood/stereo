<?php

/*

   ______     ______    ______     ______     ______     ______    
  /\  ___\   /\__  _\  /\  ___\   /\  == \   /\  ___\   /\  __ \   
  \ \___  \  \/_/\ \/  \ \  __\   \ \  __<   \ \  __\   \ \ \/\ \  
   \/\_____\    \ \_\   \ \_____\  \ \_\ \_\  \ \_____\  \ \_____\ 
    \/_____/     \/_/    \/_____/   \/_/ /_/   \/_____/   \/_____/ 
               

   2.0.0 - https://github.com/jyoungblood/stereo

*/



declare(strict_types=1);



// load dependencies

require __DIR__ . '/../vendor/autoload.php';



// load environment variables

\Dotenv\Dotenv::createImmutable(__DIR__ . '/../')->load();



// build container

$containerBuilder = new \DI\ContainerBuilder(); 
$settings = require __DIR__ . '/settings.php';
$settings($containerBuilder);



// initialize app

$app = \Slim\Factory\AppFactory::createFromContainer($containerBuilder->build());



// initialize database

$GLOBALS['database'] = \VPHP\db::init([ 'host' => $_ENV['DB_HOST'], 'name' => $_ENV['DB_NAME'], 'user' => $_ENV['DB_USER'], 'password' => $_ENV['DB_PASSWORD'], 'port' => isset($_ENV['DB_PORT']) ? $_ENV['DB_PORT'] : null, 'driver' => isset($_ENV['DB_DRIVER']) ? $_ENV['DB_DRIVER'] : null, 'charset' => isset($_ENV['DB_CHARSET']) ? $_ENV['DB_CHARSET'] : null ]);



// initial middleware

$app->addBodyParsingMiddleware();
$app->addRoutingMiddleware();



// user defined middleware

(require __DIR__ . '/middleware.php')($app);



// error handling middleware

$errorMiddleware = isset($_ENV['SITE_MODE']) && $_ENV['SITE_MODE'] == 'development' ? $app->addErrorMiddleware(true, true, true) : $app->addErrorMiddleware(false, false, false);

$errorMiddleware->setErrorHandler(\Slim\Exception\HttpNotFoundException::class, function ( \Psr\Http\Message\ServerRequestInterface $request, \Throwable $exception, bool $displayErrorDetails, bool $logErrors, bool $logErrorDetails ) {
  return \Stereo\render::blade($request, new \Slim\Psr7\Response(), [
    'template' => '404',
  ], 404);
});

$errorMiddleware->setDefaultErrorHandler(function (\Psr\Http\Message\ServerRequestInterface $request, \Throwable $exception, bool $displayErrorDetails, bool $logErrors, bool $logErrorDetails ) {
  $error_code = $exception->getCode() && is_int($exception->getCode()) ? $exception->getCode() : 500;
  $error_title = method_exists($exception, 'getTitle') ? $exception->getTitle() : 'Internal Server Error';
  $error_detail = false;
  if ($displayErrorDetails) {
    $error_detail = [
      'title' => (method_exists($exception, 'getTitle') ? $exception->getTitle() : 'Application Error'),
      'details' => [
        'type' => get_class($exception),
        'code' => $exception->getCode(),
        'message' => htmlentities($exception->getMessage()),
        'file' => $exception->getFile(),
        'line' => $exception->getLine(),
        'trace' => $exception->getTraceAsString()
      ]
    ];
  }
  return \Stereo\render::blade($request, new \Slim\Psr7\Response(), [
    'template' => 'error',
    'data' => [
      'title' => $error_code . ' - ' . $error_title,
      'status_code' => $error_code,
      'error_message' => $error_title,
      'error_detail' => $error_detail
    ]
  ], $error_code);
});



// load routes

$finder = new \Symfony\Component\Finder\Finder();
foreach ($finder->files()->in(__DIR__ . '/routes')->name('*.php') as $file) {
  require_once $file->getRealPath();
}



return $app;