<?php
$app = include(__DIR__."/app.php");
// mysql
return [
    'host' => 'localhost',
    'database_name' => $app['name'],
    'username' => 'root',
    'password' => '',
    'port' => 3306,
];