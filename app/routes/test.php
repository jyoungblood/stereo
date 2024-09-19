<?php

// date_default_timezone_set('America/Chicago');
// error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);


use Slime\render;


$app->get('/test', function ($req, $res, $args) {

  return render::html($req, $res, 'michael phone test');

});



?>