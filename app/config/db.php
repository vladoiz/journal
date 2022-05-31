<?php


$host = 'db_mariadb';
$dbname = 'main_db';
$username = 'root';
$password = 's1tt4svF21S12abt3e1daud4len';
return [
    'class' => 'yii\db\Connection',
    'dsn' => "mysql:host=${host};dbname=${dbname}",
    'username' => $username,
    'password' => $password,
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
