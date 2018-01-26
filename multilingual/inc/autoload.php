<?php
session_start();

require_once('config.php');

function __autoload($class_name) {
	$class = explode('_', $class_name);
	$path = implode(DS, $class).'.php';
	@require_once($path);
}