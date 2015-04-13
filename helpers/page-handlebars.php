<?php

use Handlebars\Handlebars;

class PageHandlebars {

	public static function render(){

		$GLOBALS["_hbs_engine"] = new Handlebars();
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

	}

	public static function parse( &$view ){
		$args = func_get_args();
		if( !isset( $args[1] ) ) $args[1] = get_defined_vars();
		$engine = $GLOBALS["_hbs_engine"];
		$view = $engine->render( $view, $args[1]);
	}
}


?>