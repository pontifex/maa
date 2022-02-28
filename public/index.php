<?php

require '../src/bootstrap.php';

echo sprintf(
    'Users found: %d',
    User::query()->get()->count()
);

echo '<br /><br /><a href="register_user.php">Register user</a>';
