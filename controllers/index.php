<?php

// date_default_timezone_set('America/Chicago');
// error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

// use Slime\render;

// $app->get('/', function ($req, $res, $args) {

//   return render::hbs($req, $res, [
//     'layout' => '_layouts/base',
//     'template' => 'index',
//     // 'title' => $_ENV['site_title'],
//   ]);

// });



require 'controllers/dw/docs.php'; 
require 'controllers/dw/guide.php'; 


use Slime\render;


use VPHP\http;
use VPHP\cookie;
use VPHP\db;
use VPHP\x;






  $GLOBALS['hello'] = [
    (object) ['name' => 'Dolly', 'location' => 'San Francisco'], 
    (object) ['name' => 'Kitty', 'location' => 'Dallas'], 
    (object) ['name' => 'Cleveland', 'location' => 'Ohio'], 
    (object) ['name' => 'Fresh', 'location' => 'Bucharest'], 
    (object) ['name' => 'Mother', 'location' => 'Boston'],
    (object) ['name' => 'J-bird', 'location' => 'Algarve'],
    (object) ['name' => 'Goodbye', 'location' => 'In Your Arms']
  ];



  $GLOBALS['hello_arr'] = [
    ['name' => 'Dolly', 'location' => 'San Francisco'], 
    ['name' => 'Kitty', 'location' => 'Dallas'], 
    ['name' => 'Cleveland', 'location' => 'Ohio'], 
    ['name' => 'Fresh', 'location' => 'Bucharest'], 
    ['name' => 'Mother', 'location' => 'Boston'],
    ['name' => 'J-bird', 'location' => 'Algarve'],
    ['name' => 'Goodbye', 'location' => 'In Your Arms']
  ];





















$app->get('/', function ($req, $res, $args) {



  return render::blade($req, $res, [
    'template' => 'index',
    'data' => [
      'current_home' => true,
      'test_list' => db::find('test_static', 'id IS NOT NULL')
    ]
  ]);


});

















  $app->get('/json-response[/]', function ($req, $res, $args) {

    return render::json($req, $res, $GLOBALS['hello']);

  });













  $app->get('/hello/{name}[/]', function ($req, $res, $args) {
    
    return render::blade($req, $res, [
      'template' => 'hello',
      'data' => [
        'name' => $args['name'],
        'current_hello' => true
      ]
    ]);

  });




















  


$app->get('/blade', function ($req, $res, $args) {


  // cookie::set('test-cookie', 'hey whats up');
  // cookie::delete('test-cookie');
  


  // unlike the hbs functions, we define the title in template :(

  return render::blade($req, $res, [
    'template' => 'demo',
    'data' => [
      'current_blade' => true,
      "who"=>"bitch",
      'name' => 'rayne - the vampire who kills vampires',
      'foo' => 'cleveland ... i\'m amazed that this works',
      'bar' => 2,
      'first' => 123,
      'second' => 456,
      'hello' => $GLOBALS['hello'],
      'hello_arr' => $GLOBALS['hello_arr'],
      'api_response' => http::json('/json-reponse', ['method' => 'GET']),
      'test_cookie' => cookie::get('test-cookie'),
      'slug_demo' => x::url_slug('This is A Long string!!!'),
      'client_ip' => x::client_ip(),
      'slime_links' => [
        'https://github.com/hxgf/slime-utilities',
        'https://github.com/hxgf/slime-render',
        'https://github.com/hxgf/dbkit',
        'https://github.com/hxgf/http-request',
        'https://github.com/hxgf/cookie',
        'https://github.com/hxgf/x-utilities'
      ],
      // , 'myvalue' => @$_REQUEST['myform'],
      'countries' => [

  (object) ['id' => 1, 'cod' => 'ar', 'name' => "Argentina", 'continent' => "America"],
  (object) ['id' => 2, 'cod' => 'ca', 'name' => "Canada", 'continent' => "America"],
  (object) ['id' => 3, 'cod' => 'us', 'name' => "United States", 'continent' => "America"],
  (object) ['id' => 4, 'cod' => 'jp', 'name' => "Japan", 'continent' => "Asia"],
  (object) ['id' => 5, 'cod' => 'ko', 'name' => "Korea", 'continent' => "Asia"],
  (object) ['id' => 6, 'cod' => 'tw', 'name' => "Taiwan", 'continent' => "Asia"],
]
                  , 'selection' => 3
            , 'countrySelected' => 3
            , 'multipleSelect' => [1, 2],
      'firstname' => @$_REQUEST['firstname'],
      'lastname' => @$_REQUEST['lastname'],
      'saved' => [
        'email' => 'xQfYV@example.com',
      ]
    ]
  ]);




});














  


$app->get('/blade-template', function ($req, $res, $args) {




// do a one-off with the default settings

  echo render::blade_template('demo',
    [
      'current_blade_template' => true,
      "who"=>"bitch",
      'name' => 'rayne - the vampire who kills vampires',
      'foo' => 'cleveland ... i\'m amazed that this works',
      "who"=>"bitch",
      'name' => 'rayne - the vampire who kills vampires',
      'foo' => 'cleveland ... i\'m amazed that this works',
      'bar' => 2,
      'first' => 123,
      'second' => 456,
      'hello' => $GLOBALS['hello'],
      'hello_arr' => $GLOBALS['hello_arr'],
      'api_response' => http::json('/json-reponse', ['method' => 'GET']),
      'test_cookie' => cookie::get('test-cookie'),
      'slug_demo' => x::url_slug('This is A Long string!!!'),
      'client_ip' => x::client_ip(),
      'slime_links' => [
        'https://github.com/hxgf/slime-utilities',
        'https://github.com/hxgf/slime-render',
        'https://github.com/hxgf/dbkit',
        'https://github.com/hxgf/http-request',
        'https://github.com/hxgf/cookie',
        'https://github.com/hxgf/x-utilities'
      ],
      // , 'myvalue' => @$_REQUEST['myform'],
      'countries' => [

  (object) ['id' => 1, 'cod' => 'ar', 'name' => "Argentina", 'continent' => "America"],
  (object) ['id' => 2, 'cod' => 'ca', 'name' => "Canada", 'continent' => "America"],
  (object) ['id' => 3, 'cod' => 'us', 'name' => "United States", 'continent' => "America"],
  (object) ['id' => 4, 'cod' => 'jp', 'name' => "Japan", 'continent' => "Asia"],
  (object) ['id' => 5, 'cod' => 'ko', 'name' => "Korea", 'continent' => "Asia"],
  (object) ['id' => 6, 'cod' => 'tw', 'name' => "Taiwan", 'continent' => "Asia"],
]
                  , 'selection' => 3
            , 'countrySelected' => 3
            , 'multipleSelect' => [1, 2],
      'firstname' => @$_REQUEST['firstname'],
      'lastname' => @$_REQUEST['lastname'],
      'saved' => [
        'email' => 'xQfYV@example.com',
      ]
  ]);

  return render::html($req, $res, '');




});







?>