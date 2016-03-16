<?php


$app->get('/', function(){

	$planet_group[] = array(
		'one' => 'Mercury',
		'two' => 'Venus',
		'three' => 'Earth'
	);
	
	$planet_group[] = array(
		'one' => 'Mars',
		'two' => 'Jupiter',
		'three' => 'Saturn',
		'four' => 'Uranus'
	);
	
	$planet_group[] = array(
		'one' => 'Neptune',
		'two' => 'Pluto',
		'three' => 'Nibiru'
	);

	$data = array(
    'snacks' => array(
      'Carrots',
      'Hay',
      'Sugar Cubes',
      'Oats'
    ),
    'planet_group' => $planet_group
  );

	$GLOBALS['app']->render_template(array(
		'template' => 'index',
    'title' => $GLOBALS['site_title'],
		'data' => $data
	));

});







/*

	EXAMPLE RESPONSES

$app->get('/', function(){
	
	// so many response options!

	// render handlebars template (stereo abstraction)
// 	$GLOBALS['app']->render_template(array(
// 		'template' => 'planets',
//     'title' => 'planetas',
//     'layout' => false,
// 		'data' => array(
// 			'righteous_content' => 'for_sure'
// 		)
// 	));

	// render a normal handlebars template
	echo $GLOBALS['engine']->render('index', []);

	// require a given php/html/whatever page
// 	require __DIR__ . '/pages/whatever.html';

	// send an array as json for handy api responses
// 	$GLOBALS['app']->json_response(array(
// 		'righteous_content' => 'for sure'
// 	));

	// send whatever responses, headers, redirects
// 	header("Location: http://partyphysics.com/");

	// or execute any php code...do literally whatever you want
});





$app->get('/planets/*', function(){

	$GLOBALS['app']->render_template(array(
		'template' => 'stereo_planets',
    'title' => 'planetas',
		'data' => array()
	));
});







// map homepage
$app->get('/planets/[*:whatever]', function($whatever){
	echo $whatever;
	$normal_array[] = array(
		'one' => '1',
		'two' => '2',
		'three' => '3'
	);
	
	$normal_array[] = array(
		'one' => '4',
		'two' => '5',
		'three' => '69'
	);
	
	$normal_array[] = array(
		'one' => '17',
		'two' => '28',
		'three' => '93'
	);


	$data = array(
    'planets' => array(
        "Mercury",
        "Venus",
        "Earth",
        "Mars",
        "ganymede",
        "charon",
        "europa",
        "proscion"
    ),
    'normal_array' => $normal_array
  );

	$GLOBALS['app']->render_template(array(
		'template' => 'stereo_planets',
    'title' => 'planetas',
    'layout' => false,
		'data' => $data
	));

});








$app->get('/admin', function(){

	$data = $GLOBALS['app']->api_request('/admin/events/screen', 
	array(
	));	

	$data['current_events'] = true;
	$data['current_events_all'] = true;

	$GLOBALS['app']->render_template(array(
		'layout' => 'admin',
		'template' => 'admin/admin-events',
    'title' => 'Admin - Events - ' . $GLOBALS['site_title'],
    'data' => $data
	));

});


*/





