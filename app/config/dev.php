<?php

// Doctrine (db)
$app['db.options'] = array(
	'driver'   => 'pdo_mysql',
	'charset'  => 'utf8',
	'host'     => '172.17.0.4',
	'port'     => '3306',
	'dbname'   => 'microcms',
	'user'     => 'root',
	'password' => 'secret',
	);

// enable the debug mode
$app['debug'] = true;

// define log level
$app['monolog.level'] = 'INFO';