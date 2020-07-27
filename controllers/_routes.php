<?php


$app->get('/', function(){

	$welcome_icons = array('⦛','⦝','⦤','⦥','⧥','⧷','⨬','⨳','⩸','▨','◯','◉','◎','𐌆','♥','☼','⁙');

	$GLOBALS['app']->render_template(array(
		'template' => 'index',
		'title' => $GLOBALS['site_title'],
		'data' => array(
			'welcome_icon' => $welcome_icons[array_rand($welcome_icons)]
		)
	));

});

