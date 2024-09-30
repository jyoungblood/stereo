<?php


$app->get('/', function ($req, $res, $args) {

  return \Stereo\render::blade($req, $res, [
    'template' => 'index',
  ]);

});


?>