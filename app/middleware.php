<?php

return function (\Slim\App $app) {


// REF - auth middleware from https://github.com/mcvendrell/SlimFramework4LoginAuth/blob/main/src/Application/app.php

// $loggedInMiddleware = function($request, $handler): ResponseInterface {
//     $routeContext = RouteContext::fromRequest($request);
//     $route = $routeContext->getRoute();

//     if (empty($route)) { throw new HttpNotFoundException($request, $response); }

//     $routeName = $route->getName();

//     // Define routes that user does not have to be logged in with. All other routes, the user needs to be logged in with.
//     // Names for routes must be defined in routes.php with ->setName() for each one.
//     $publicRoutesArray = array('root', 'apiLogin');

//     var_dump("User ID: ".(empty($_SESSION['user']) ? ' none' : $_SESSION['user']));
//     if (empty($_SESSION['user']) && (!in_array($routeName, $publicRoutesArray))) {
//       echo "not allowed";
//         $routeParser = $routeContext->getRouteParser();
//         $url = $routeParser->urlFor('root');

//         $response = new \Slim\Psr7\Response();

//         return $response->withHeader('Location', $url)->withStatus(302);
//     } else {

//         $response = $handler->handle($request);

//         return $response;
//     }
// };
// $app->add($loggedInMiddleware);








// example of before middleware from SLIM docs

  // $beforeMiddleware = function (\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler) use ($app) {

  //     // echo $app->getContainer()->get('settings')['test_setting'];
  //     // echo $this->get('settings')['test_setting'];
  //     $app->getContainer()->set('user_id', '8675309');


  //     // // Example: Check for a specific header before proceeding
  //     // $auth = $request->getHeaderLine('Authorization');
  //     // if (!$auth) {
  //     //     // Short-circuit and return a response immediately
  //     //     $response = $app->getResponseFactory()->createResponse();
  //     //     $response->getBody()->write('Unauthorized');
          
  //     //     return $response->withStatus(401);
  //     // }

  //     // Proceed with the next middleware
  //     return $handler->handle($request);
  // };
  // $app->add($beforeMiddleware);




// example of after middleware from SLIM docs

  // $afterMiddleware = function (\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Server\RequestHandlerInterface $handler) {
  //     // Proceed with the next middleware
  //     $response = $handler->handle($request);
      
  //     // Modify the response after the application has processed the request
  //     $response = $response->withHeader('X-Added-Header', 'some-value');

  //     return $response;
  // };
  // $app->add($afterMiddleware);





  

};
