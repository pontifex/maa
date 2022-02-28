<?php

require "../src/bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('login');
    $table->string('password');
    $table->timestamps();
});
