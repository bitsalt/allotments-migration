<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $function
 * @property string $param
 * @property string $subparam
 * @property int $year
 * @property string $value
 * @property boolean $disp_order
 * @property string $comment
 * @property string $lastupdate
 */
class LegacyParams extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['id', 'function', 'param', 'subparam', 'year', 'value', 'disp_order', 'comment', 'lastupdate'];

}
