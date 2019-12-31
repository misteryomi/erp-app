<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Appraisal
 *
 * @property int $id
 * @property int|null $status
 * @property string|null $reject_cotent
 * @property int|null $completed
 * @property int $user_id
 * @property int|null $manager_id
 * @property int|null $hod_id
 * @property int|null $hod_actioned
 * @property string $year
 * @property int|null $hr_id
 * @property string|null $kpi1_field
 * @property string|null $kpi1_target
 * @property string|null $kpi1_weight
 * @property int|null $kpi1_staff
 * @property int|null $kpi1_manager
 * @property string|null $kpi2_field
 * @property string|null $kpi2_target
 * @property string|null $kpi2_weight
 * @property int|null $kpi2_staff
 * @property int|null $kpi2_manager
 * @property string|null $kpi3_field
 * @property string|null $kpi3_target
 * @property string|null $kpi3_weight
 * @property int|null $kpi3_staff
 * @property int|null $kpi3_manager
 * @property string|null $kpi4_field
 * @property string|null $kpi4_target
 * @property string|null $kpi4_weight
 * @property int|null $kpi4_staff
 * @property int|null $kpi4_manager
 * @property string|null $kpi5_field
 * @property string|null $kpi5_target
 * @property string|null $kpi5_weight
 * @property int|null $kpi5_staff
 * @property int|null $kpi5_manager
 * @property string|null $kpi6_field
 * @property string|null $kpi6_target
 * @property string|null $kpi6_weight
 * @property int|null $kpi6_staff
 * @property int|null $kpi6_manager
 * @property string|null $kpi7_field
 * @property string|null $kpi7_target
 * @property string|null $kpi7_weight
 * @property int|null $kpi7_staff
 * @property int|null $kpi7_manager
 * @property string|null $kpi8_field
 * @property string|null $kpi8_target
 * @property string|null $kpi8_weight
 * @property int|null $kpi8_staff
 * @property int|null $kpi8_manager
 * @property string|null $kpi_comment_staff
 * @property string|null $kpi_comment_manager
 * @property string|null $competency1_field
 * @property string|null $competency1_target
 * @property string|null $competency1_weight
 * @property int|null $competency1_staff
 * @property int|null $competency1_manager
 * @property string|null $competency2_field
 * @property string|null $competency2_target
 * @property string|null $competency2_weight
 * @property int|null $competency2_staff
 * @property int|null $competency2_manager
 * @property string|null $competency3_field
 * @property string|null $competency3_target
 * @property string|null $competency3_weight
 * @property int|null $competency3_staff
 * @property int|null $competency3_manager
 * @property string|null $competency_comment_staff
 * @property string|null $competency_comment_manager
 * @property string|null $behavioural1_field
 * @property string|null $behavioural1_target
 * @property string|null $behavioural1_weight
 * @property int|null $behavioural1_staff
 * @property int|null $behavioural1_manager
 * @property string|null $behavioural2_field
 * @property string|null $behavioural2_target
 * @property string|null $behavioural2_weight
 * @property int|null $behavioural2_staff
 * @property int|null $behavioural2_manager
 * @property string|null $behavioural_comment_staff
 * @property string|null $behavioural_comment_manager
 * @property string|null $development1_field
 * @property string|null $development1_target
 * @property string|null $development1_weight
 * @property int|null $development1_staff
 * @property int|null $development1_manager
 * @property string|null $development2_field
 * @property string|null $development2_target
 * @property string|null $development2_weight
 * @property int|null $development2_staff
 * @property int|null $development2_manager
 * @property string|null $development_comment_staff
 * @property string|null $development_comment_manager
 * @property string|null $final_comment_staff
 * @property string|null $final_comment_manager
 * @property string|null $promoted_to
 * @property string|null $promotion_reasons
 * @property int|null $hr_actioned
 * @property int|null $staff_actioned
 * @property int|null $manager_actioned
 * @property int|null $appraisal_year_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Appraisal_year|null $appraisal_year
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereAppraisalYearId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereBehavioural1Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereBehavioural1Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereBehavioural1Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereBehavioural1Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereBehavioural1Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereBehavioural2Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereBehavioural2Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereBehavioural2Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereBehavioural2Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereBehavioural2Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereBehaviouralCommentManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereBehaviouralCommentStaff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency1Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency1Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency1Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency1Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency1Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency2Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency2Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency2Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency2Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency2Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency3Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency3Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency3Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency3Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetency3Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetencyCommentManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompetencyCommentStaff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereDevelopment1Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereDevelopment1Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereDevelopment1Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereDevelopment1Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereDevelopment1Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereDevelopment2Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereDevelopment2Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereDevelopment2Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereDevelopment2Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereDevelopment2Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereDevelopmentCommentManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereDevelopmentCommentStaff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereFinalCommentManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereFinalCommentStaff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereHodActioned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereHodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereHrActioned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereHrId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi1Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi1Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi1Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi1Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi1Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi2Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi2Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi2Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi2Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi2Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi3Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi3Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi3Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi3Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi3Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi4Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi4Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi4Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi4Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi4Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi5Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi5Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi5Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi5Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi5Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi6Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi6Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi6Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi6Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi6Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi7Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi7Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi7Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi7Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi7Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi8Field($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi8Manager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi8Staff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi8Target($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpi8Weight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpiCommentManager($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereKpiCommentStaff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereManagerActioned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereManagerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal wherePromotedTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal wherePromotionReasons($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereRejectCotent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereStaffActioned($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Appraisal whereYear($value)
 * @mixin \Eloquent
 */
class Appraisal extends Model
{
	
	
    protected $table = 'appraisals';

	
	public function user()
	{
		return $this->belongsTo('App\User','user_id');
	}

	
	public function appraisal_year()
	{
		return $this->belongsTo('App\Appraisal_year','appraisal_year_id');
	}

	
}
