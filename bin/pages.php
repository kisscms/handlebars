<?php

//===============================================
// Pages Initialization
//===============================================

// add hooks
if( class_exists('Event') && method_exists('Event','on') ){

	Event::on("view:parse", 'PageHandlebars' );

Event::trigger('page:render', $file, $vars);

}

?>