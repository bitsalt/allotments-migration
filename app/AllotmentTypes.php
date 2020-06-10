<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $school_year
 * @property string $allotment_prog_code
 * @property string $allotment_prog_desc
 * @property int $category_id
 * @property string $data_link
 * @property boolean $is_carryover
 * @property string $date_created
 * @property string $date_modified
 */
class AllotmentTypes extends Model
{

    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['school_year', 'allotment_prog_code', 'allotment_prog_desc', 'category_id', 'data_link', 'is_carryover', 'date_created', 'date_modified'];

    protected $attributes = [
        'is_carryover' => 0,
    ];
}
