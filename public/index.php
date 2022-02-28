<?php

require '../src/bootstrap.php';

echo sprintf(
    'Users found: %d',
    User::query()->where('is_admin', '=', 0)->get()->count()
);

echo '<br />';

echo sprintf(
    'Admins found: %d',
    User::query()->where('is_admin', '=', 1)->get()->count()
);

echo '<br /><br /><a href="register_user.php">Register user</a>';
echo '<br /><br /><a href="register_admin.php">Register admin</a>';
