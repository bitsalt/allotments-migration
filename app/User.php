<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property string $password
 * @property string $salt
 * @property string $role
 * @property string $email
 * @property string $date_created
 * @property string $date_modified
 * @property boolean $passwd_reset
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['username', 'first_name', 'last_name', 'password', 'salt', 'role', 'email', 'date_created', 'date_modified', 'passwd_reset'];

}
