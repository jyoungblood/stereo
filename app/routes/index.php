<?php

use Stereo\render;


$app->get('/', function ($req, $res, $args) {

  return render::blade($req, $res, [
    'template' => 'index',
  ]);

});



?>