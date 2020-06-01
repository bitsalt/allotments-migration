<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $school_year
 * @property int $param_name
 * @property float $param_num
 */
class NewParms extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['school_year', 'param_name', 'param_num'];

    /**
     * Differs from traditional Laravel naming pattern.
     * @var string
     */
    protected $table = 'newparms';
}
