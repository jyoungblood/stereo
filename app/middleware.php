<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Server\RequestHandlerInterface as RequestHandler;

return function (\Slim\App $app) {


// BEFORE middleware example

  // $app->add(function (Request $request, RequestHandler $handler) use ($app) {
  //   $this->set('user_id', '8675309');
  //   return $handler->handle($request);
  // });


// AFTER middleware example

  // $app->add(function (Request $request, RequestHandler $handler) {
  //   $response = $handler->handle($request);
  //   $response = $response->withHeader('X-Added-User-Id', $this->get('user_id'));
  //   return $response;
  // });


};
