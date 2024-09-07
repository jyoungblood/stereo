<?php


use Slime\render;



// this works wow

$app->get('/guide[/{params:.*}[/]]', function ($request, $response, $args) {
    // responds to `/news`, `/news/2016` and `/news/2016/03`
    // ...

  $params = isset($args['params']) ? array_filter(explode('/', $args['params'])) : [];

  $template_path = isset($GLOBALS['settings']['templates']['path']) ? $GLOBALS['settings']['templates']['path'] : 'templates';
  $template_extension = isset($GLOBALS['settings']['templates']['extension']) ? $GLOBALS['settings']['templates']['extension'] : 'html';


  // echo "<pre>";
  // print_r($params);
  // echo "</pre><br /><Br />";

  $file_path = 'guide';
  foreach ($params as $pr){
    $file_path .= '/' . $pr;
  }
  if ($file_path == 'guide'){
    $file_path .= '/index';
  }
    
    // echo $file_path . '<br /><br /><br />';

    if (
      file_exists('./'.$template_path.'/' . $file_path .'.'. $template_extension)
    ){

      return render::hbs($request, $response, [
        'layout' => '_layouts/guide',
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
// https://www.slimframework.com/guide/v4/objects/routing.html




// doesn't work:

// $app->get('/guide[/{params:.*}]', function ($req, $res, array $args) {

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
//   //   'layout' => '_layouts/guide',
//   //   // 'template' => 'guide' . $file_path,
//   //   'template' => 'guide/home',
//   //   'title' => 'guide - ' . $GLOBALS['site_title'],
//   //   'data' => [
//   //     'hide_footer' => true
//   //   ]
//   // ]);

// });






// $app->get('/guide[/]', function ($req, $res, $args) {

//   return render::hbs($req, $res, [
//     'layout' => '_layouts/guide',
//     'template' => 'guide/home',
//     'title' => 'guide - ' . $GLOBALS['site_title'],
//     'data' => [
//       // 'hide_footer' => true
//     ]
//   ]);

// });









// $app->get('/guide/default[/]', function ($req, $res, $args) {

//   return render::hbs($req, $res, [
//     'layout' => '_layouts/guide',
//     'template' => 'guide-elements',
//     'title' => 'default elements - ' . $GLOBALS['site_title'],
//     'data' => [
//       // 'hide_footer' => true
//     ]
//   ]);

// });

