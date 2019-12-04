<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Accountstatement
 *
 * @property int $id
 * @property int|null $staff
 * @property string|null $accout_no
 * @property array $body
 * @property string|null $customer_name
 * @property string|null $customer_cif
 * @property string|null $opening_balance
 * @property string|null $closing_balance
 * @property string|null $transaction_count
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $cust_email
 * @property string|null $cust_phone
 * @property string|null $firstname
 * @property string|null $surname
 * @property string|null $preferedname
 * @property string|null $address
 * @property string|null $employer
 * @property string|null $gender
 * @property string|null $loantype
 * @property string|null $account_officer
 * @property string|null $bvn
 * @property string|null $age
 * @property string|null $next_of_kin
 * @property string|null $next_of_kin_phone
 * @property string|null $others
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Accountstatement onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereAccountOfficer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereAccoutNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereBvn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereClosingBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereCustEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereCustPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereCustomerCif($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereEmployer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereLoantype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereNextOfKin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereNextOfKinPhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereOpeningBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereOthers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement wherePreferedname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereStaff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereSurname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereTransactionCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Accountstatement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Accountstatement withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Accountstatement withoutTrashed()
 * @mixin \Eloquent
 */
class Accountstatement extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at'];


    protected $table = 'accountstatements';

     protected $casts = [
        'body' => 'array'
    ];


}
