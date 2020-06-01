<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $resourceid
 * @property string $name
 * @property string $category_name
 * @property int $start_yr
 * @property int $end_yr
 * @property string $glevel
 * @property int $lastupdate
 * @property string $data_link
 */
class LegacyResources extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['resourceid', 'name', 'category_name', 'start_yr', 'end_yr', 'glevel', 'lastupdate', 'data_link'];

}
