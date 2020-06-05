<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    protected $primaryKey = 'category_id';

    //public $incrementing = 'category_id';

    public $timestamps = false;

    protected $fillable = ['category_name', 'school_year', 'fund', 'salary_nonsalary_ind', 'display_order'];

}
