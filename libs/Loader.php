<?php namespace Libs;

spl_autoload_register(function($class) {
	$patch = str_replace('\\', '/', $class . ".php");
	if (file_exists($patch)) {
		require_once $patch;
	}
});