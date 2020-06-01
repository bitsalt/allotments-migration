<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $report_id
 * @property int $user_id
 * @property int $app_id
 * @property string $database
 * @property string $report_name
 * @property string $file_name
 * @property string $report_queries
 * @property string $report_code
 * @property string $report_params
 * @property string $get_session_vars
 * @property string $q_or_c
 * @property string $return_as
 * @property string $view
 * @property string $created
 */
class SpecificReports extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'report_id';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'app_id', 'database', 'report_name', 'file_name', 'report_queries', 'report_code', 'report_params', 'get_session_vars', 'q_or_c', 'return_as', 'view', 'created'];

}
