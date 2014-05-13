<?php

include_once "autoloader.php";

$ini = parse_ini_file("config/config.ini");

define("SITENAME", $ini['SITENAME']);
define("AUTOR", $ini['AUTOR']);

autoloader::init();