<?php

// Doctrine (db)
$app['db.options'] = array(
	'driver'   => 'pdo_mysql',
	'charset'  => 'utf8',
	'host'     => '172.17.0.2',
	'port'     => '3306',
	'dbname'   => 'microcms',
	'user'     => 'root',
	'password' => 'secret',
	);

// define log level
$app['monolog.level'] = 'WARNING';