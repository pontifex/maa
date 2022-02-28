<?php

require '../src/bootstrap.php';

echo sprintf(
    'Users found: %d',
    User::query()->get()->count()
);
