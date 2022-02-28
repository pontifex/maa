<?php

require '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'container_mysql_maa',
    'database' => 'maa_local',
    'username' => 'root',
    'password' => 'root'
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
