<?php


$config = [];
if (file_exists("config.ini"))
$config = parse_ini_file("config.ini");

function conf($e){
	global $config;

	if (isset($config[$e]))
		return $config[$e];
	else
		return false;
}

print_r(conf('animal'));