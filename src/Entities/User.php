<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * @property string $login
 * @property string $password
 * @property bool $is_admin
 */
class User extends Eloquent
{
    protected $fillable = [
        'login',
        'password',
        'is_admin'
    ];
}
