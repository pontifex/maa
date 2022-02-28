<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * @property string $login
 * @property string $password
 */
class User extends Eloquent
{
    protected $fillable = [
        'login',
        'password'
    ];
}
