<?php

// date_default_timezone_set('America/Chicago');
// error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);


use Slime\render;





$app->get('/', function ($req, $res, $args) {

  return render::blade($req, $res, [
    'template' => 'index',
    'data' => [
      'current_home' => true
    ]
  ]);

});





$app->get('/demo[/]', function ($req, $res, $args) {

  return render::blade($req, $res, [
    'template' => 'demo',
    'data' => [
      'current_demo' => true
    ]
  ]);

});






$app->get('/hello/{name}[/]', function ($req, $res, $args) {
  
  return render::blade($req, $res, [
    'template' => 'demo-hello',
    'data' => [
      'current_hello' => true,
      'name' => $args['name']
    ]
  ]);

});








$app->get('/json[/]', function ($req, $res, $args) {

  return render::json($req, $res, [
    ['name' => 'Dolly', 'location' => 'San Francisco'], 
    ['name' => 'Kitty', 'location' => 'Dallas'], 
    ['name' => 'Cleveland', 'location' => 'Ohio'], 
    ['name' => 'Fresh', 'location' => 'Bucharest'], 
    ['name' => 'Mother', 'location' => 'Boston'],
    ['name' => 'J-bird', 'location' => 'Algarve'],
    ['name' => 'Goodbye', 'location' => 'In Your Arms']
  ]);

});





?>