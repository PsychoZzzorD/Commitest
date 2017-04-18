<?php

	require_once 'library/Tpl.php';
	require_once 'library/Router.php';

	$tpl = new Tpl;
	$app = new Router;

	function view($name, $arguments) {
		$tpl = new Tpl;
		return $tpl->page($name, $arguments);
	}

	$tpl->head('Page Title');

	// $tpl->page('page');

	// $tpl->footer();

	$app->get('home', function(){
		return view('home',["nomdusite"=>"Yop"]);
	});

	$app->get('bio', function(){
		return view('bio',["name"=>"Pacman"]);
	});

	$app->get('page', function(){
		return view('page',["titre"=>"Plop"]);
	});


?>