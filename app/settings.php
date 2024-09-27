<?php

// date_default_timezone_set('America/Chicago');
// error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

return function (\DI\ContainerBuilder $containerBuilder) {
  $containerBuilder->addDefinitions([
      'settings' => [
        // 'test_setting' => 'test_value',
      ],
  ]);
};
