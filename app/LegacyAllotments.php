<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $schoolid
 * @property string $resourceid
 * @property int $year
 * @property string $moe
 * @property string $conv
 * @property string $comments
 * @property string $lastupdate
 */
class LegacyAllotments extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['schoolid', 'resourceid', 'year', 'moe', 'conv', 'comments', 'lastupdate'];

}
