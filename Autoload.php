<?php
set_include_path(
	get_include_path() . PATH_SEPARATOR .
	dirname(__FILE__) . '/src' . PATH_SEPARATOR .
	dirname(__FILE__) . '/test' . PATH_SEPARATOR .
	dirname(__FILE__) . '/examples'
);
function autoload($clazz) {
	$load = preg_replace('/\\\/', DIRECTORY_SEPARATOR, $clazz) . '.php';
	@require_once($load);
}
spl_autoload_register('autoload');
?>