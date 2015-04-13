<?php

require '../lib/Handlebars/Autoloader.php';
Handlebars\Autoloader::register();

use Handlebars\Handlebars;


class PageHandlebars {

	render: function(){
		$this->engine = new Handlebars();
		/*
		$engine = new Handlebars(array(
			'loader' => new \Handlebars\Loader\FilesystemLoader(__DIR__.'/templates/'),
			'partials_loader' => new \Handlebars\Loader\FilesystemLoader(
				__DIR__ . '/templates/',
				array(
					'prefix' => '_'
				)
			)
		));
		*/
	},

	parse: function( $view, $data ){
		$view = $this->engine->render($view, $data);
		return $view;
	}
}


?>