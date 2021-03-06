<?php

declare(strict_types=1);

return [
    'db' => [
        'dbname' => getenv('USERVAR_DB_NAME'),
        'user' => getenv('USERVAR_DB_USERNAME'),
        'password' => getenv('USERVAR_DB_PASSWORD'),
        'host' => getenv('USERVAR_DB_HOST'),
        'port' => getenv('USERVAR_DB_PORT'),
        # Only PDO
        'driver' => 'mysql',
        'driverOptions' => array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
    ]
];
