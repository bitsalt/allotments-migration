<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $schoo Yes, it's really like that...
 * @property string $dayvalue
 * @property string $gradevalue
 * @property int $studentcount
 */
class LegacyMembership extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['schoo', 'dayvalue', 'gradevalue', 'studentcount'];

    /**
     * Differs from traditional Laravel naming pattern. This may also change as different years
     * are imported.
     * @var string
     */
    protected $table = 'legacy_membership2006';
}
