<?php

require '../src/bootstrap.php';

if (isset($_GET['login']) && isset($_GET['password'])) {

    \validateRegisterUserForm($_GET);

    $user = new User();
    $user->fill($_GET);

    echo sprintf(
        'Created user with login "%s" and password "%s"',
        $user->login,
        $user->password
    );
}

function validateRegisterUserForm(array $values)
{
    if (! in_array($values['login'], ['pontifex1', 'pontifex2', 'pontifex3', 'pontifex4'])) {
        throw new \RuntimeException('Not valid login');
    }

    if (strlen($values['password']) < 1 || strlen($values['password']) > 5) {
        throw new \RuntimeException('Not valid password');
    }
}
