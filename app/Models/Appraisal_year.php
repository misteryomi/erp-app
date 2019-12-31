<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Appraisal_year
 *
 * @property int $id
 * @property string $year
 * @property string $title
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $score
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal_year whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal_year whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal_year whereScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal_year whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal_year whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal_year whereYear($value)
 * @mixin \Eloquent
 */
class Appraisal_year extends Model
{
	
	
    protected $table = 'appraisal_years';

	
}
