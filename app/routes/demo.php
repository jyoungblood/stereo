<?php

use Stereo\render;




$app->get('/demo[/]', function ($req, $res, $args) {



  return render::blade($req, $res, [
    'template' => 'demo.index',
    'data' => [
      'current_home' => true
    ]
  ]);

});










$app->get('/elements[/]', function ($req, $res, $args) {



  return render::blade($req, $res, [
    'template' => 'demo.elements',
    'data' => [
      'current_elements' => true
    ]
  ]);

});







$app->get('/hello/{name}[/]', function ($req, $res, $args) {
  

  return render::blade($req, $res, [
    'template' => 'demo.hello',
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