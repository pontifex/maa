<?php

require "../src/bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('users', function ($table) {
    $table->increments('id');
    $table->string('login');
    $table->string('password');
    $table->boolean('is_admin')->default(false);
    $table->timestamps();
});
