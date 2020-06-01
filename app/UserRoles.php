<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $role
 */
class UserRoles extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['role'];

    /**
     * Differs from traditional Laravel naming pattern.
     * @var string
     */
    protected $table = 'user_role';
}
