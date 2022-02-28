<?php

require '../src/bootstrap.php';

if (isset($_GET['login']) && isset($_GET['password'])) {

    \validateRegisterAdminForm($_GET);

    $user = new User();
    $user->fill($_GET);
    $user->save();

    echo sprintf(
        'Created admin with login "%s" and password "%s"',
        $user->login,
        $user->password
    );
}

function validateRegisterAdminForm(array $values)
{
    if (! in_array($values['login'], ['admin1', 'admin2', 'admin3', 'admin4'])) {
        throw new \RuntimeException('Not valid login');
    }

    if (strlen($values['password']) < 1 || strlen($values['password']) > 5) {
        throw new \RuntimeException('Not valid password');
    }

    if ($values['is_admin'] !== "1") {
        throw new \RuntimeException('Not valid is_admin');
    }
}
