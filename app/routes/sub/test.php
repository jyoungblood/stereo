<?php

// date_default_timezone_set('America/Chicago');
// error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);


use Slime\render;


$app->get('/subtest', function ($req, $res, $args) {

  return render::html($req, $res, 'sub michael phone test');

});



?>