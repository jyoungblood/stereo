<?php


$app->get('/', function(){

	$GLOBALS['app']->render_template(array(
		'template' => 'index',
    'title' => $GLOBALS['site_title'],
	));

});





$app->get('/demo', function(){

	$planet_group[] = array(
		'title' => 'Gas Giants',
		'planets' => [array(
			'name' => 'Jupiter'
		), array(
			'name' => 'Neptune'
		), array(
			'name' => 'Uranus'
		)]
	);

	$planet_group[] = array(
		'title' => 'Moons',
		'planets' => [array(
			'name' => 'Luna',
			'note' => 'Earth\'s moon, also known as "moon"'
		), array(
			'name' => 'IO'
		), array(
			'name' => 'Ganymede'
		), array(
			'name' => 'Europa'
		), array(
			'name' => 'Phobos'
		), array(
			'name' => 'Deimos'
		), array(
			'name' => 'Callisto'
		), array(
			'name' => 'Kale'
		)]
	);

	$planet_group[] = array(
		'title' => 'Exoplanets',
		'planets' => [array(
			'name' => 'Pluto'
		), array(
			'name' => 'Nibiru',
			'note' => 'commonly referred to as "Planet X"'
		), array(
			'name' => 'Dave'
		)]
	);

	$planet_group[] = array(
		'title' => 'Potentially Habitable Planets',
		'planets' => [array(
			'name' => 'Earth'
		), array(
			'name' => 'Mars'
		), array(
			'name' => 'Europa'
		)]
	);

	$data = array(
    'snacks' => array(
      'Carrots',
      'Hay',
      'Sugar Cubes',
      'Oats',
      'Apples',
      'Weaker Horses'
    ),
    'planet_group' => $planet_group
  );

	$GLOBALS['app']->render_template(array(
		'template' => 'demo',
    'title' => $GLOBALS['site_title'] . ' - Template Demonstration',
		'data' => $data
	));

});

