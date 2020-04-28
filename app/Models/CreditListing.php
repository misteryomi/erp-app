<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CreditListing
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $pd_id
 * @property string|null $pd_customer
 * @property string|null $acct_name
 * @property string|null $ld_acct
 * @property string|null $ld_category
 * @property string|null $ld_description
 * @property string|null $employer_name
 * @property string|null $sector_description
 * @property string|null $value_date
 * @property string|null $start_date
 * @property string|null $maturity_date
 * @property string|null $tel_no
 * @property string|null $disb_amt
 * @property string|null $monthly_prin
 * @property string|null $monthly_int
 * @property string|null $no_months
 * @property string|null $outstanding_amount
 * @property string|null $paid_amt
 * @property string|null $no_in_arrears
 * @property string|null $prin_amt
 * @property string|null $int_amt
 * @property string|null $pd_start_date
 * @property string|null $pd_dpd
 * @property string|null $par_principal
 * @property string|null $officer_name
 * @property string|null $bucket
 * @property string|null $classification
 * @property string|null $accountofficer_code
 * @property string|null $report_date
 * @property string|null $interest_rate
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereAccountofficerCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereAcctName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereBucket($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereClassification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereDisbAmt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereEmployerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereIntAmt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereInterestRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereLdAcct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereLdCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereLdDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereMaturityDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereMonthlyInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereMonthlyPrin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereNoInArrears($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereNoMonths($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereOfficerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereOutstandingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing wherePaidAmt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereParPrincipal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing wherePdCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing wherePdDpd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing wherePdId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing wherePdStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing wherePrinAmt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereReportDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereSectorDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereTelNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\CreditListing whereValueDate($value)
 * @mixin \Eloquent
 */
class CreditListing extends Model
{
    protected $guarded = [];
}
