<?php


use Slime\render;



// this works wow

$app->get('/docs[/{params:.*}[/]]', function ($request, $response, $args) {
    // responds to `/news`, `/news/2016` and `/news/2016/03`
    // ...

  $params = isset($args['params']) ? array_filter(explode('/', $args['params'])) : [];

  $template_path = isset($GLOBALS['settings']['templates']['path']) ? $GLOBALS['settings']['templates']['path'] : 'templates';
  $template_extension = isset($GLOBALS['settings']['templates']['extension']) ? $GLOBALS['settings']['templates']['extension'] : 'html';


  // echo "<pre>";
  // print_r($params);
  // echo "</pre><br /><Br />";

  $file_path = 'docs';
  foreach ($params as $pr){
    $file_path .= '/' . $pr;
  }
  if ($file_path == 'docs'){
    $file_path .= '/index';
  }
    
    // echo $file_path . '<br /><br /><br />';

    if (
      file_exists('./'.$template_path.'/' . $file_path .'.'. $template_extension)
    ){

      return render::hbs($request, $response, [
        'layout' => '_layouts/docs',
        'template' => $file_path,
        'title' => 'docs - ' . $_ENV['SITE_TITLE'],
        'data' => [
          // 'hide_footer' => true
        ]
      ]);

    }else{
      // echo "404";

      return render::hbs($request, $response, [
        'template' => '404',
        'status' => 404,
        'title' => '404 NOT FOUND',
      ]);

    }



    
    // return $response;
});













// fixit how do we do an automatic router?
// https://www.slimframework.com/docs/v4/objects/routing.html




// doesn't work:

// $app->get('/docs[/{params:.*}]', function ($req, $res, array $args) {

//   // $params = explode('/', $args['params']);

//   // $file_path = '';
//   // foreach ($params as $pr){
//   //   $file_path .= '/' . $pr;
//   // }

//   // fixit 404 handler

//   // echo $file_path;

// $res->getBody()->write("Hello, ");
//     return $res;

//   // return render::hbs($req, $res, [
//   //   'layout' => '_layouts/docs',
//   //   // 'template' => 'docs' . $file_path,
//   //   'template' => 'docs/home',
//   //   'title' => 'docs - ' . $GLOBALS['site_title'],
//   //   'data' => [
//   //     'hide_footer' => true
//   //   ]
//   // ]);

// });






// $app->get('/docs[/]', function ($req, $res, $args) {

//   return render::hbs($req, $res, [
//     'layout' => '_layouts/docs',
//     'template' => 'docs/home',
//     'title' => 'docs - ' . $GLOBALS['site_title'],
//     'data' => [
//       // 'hide_footer' => true
//     ]
//   ]);

// });









// $app->get('/docs/default[/]', function ($req, $res, $args) {

//   return render::hbs($req, $res, [
//     'layout' => '_layouts/docs',
//     'template' => 'docs-elements',
//     'title' => 'default elements - ' . $GLOBALS['site_title'],
//     'data' => [
//       // 'hide_footer' => true
//     ]
//   ]);

// });

