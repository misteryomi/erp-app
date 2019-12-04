<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Liquidation
 *
 * @property int $id
 * @property int|null $staff_id
 * @property string|null $customer_name
 * @property string|null $amount_paid
 * @property string|null $date_paid
 * @property string|null $payee
 * @property string|null $liquidation_type
 * @property string|null $documents
 * @property string|null $product_type
 * @property string|null $amount_confirmed
 * @property string|null $ld
 * @property string|null $liquidation_type_ops
 * @property string|null $t24_acc_no
 * @property int|null $approved_by_ops
 * @property int|null $approved_by_cad
 * @property int|null $status_ops
 * @property int|null $status_cad
 * @property string|null $comment
 * @property string|null $other1
 * @property string|null $other2
 * @property string|null $other3
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Liquidation onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereAmountConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereAmountPaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereApprovedByCad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereApprovedByOps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereCustomerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereDatePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereDocuments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereLd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereLiquidationType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereLiquidationTypeOps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereOther1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereOther2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereOther3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation wherePayee($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereProductType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereStaffId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereStatusCad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereStatusOps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereT24AccNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Liquidation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Liquidation withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Liquidation withoutTrashed()
 * @mixin \Eloquent
 */
class Liquidation extends Model
{

	use SoftDeletes;

	protected $dates = ['deleted_at'];


    protected $table = 'liquidations';


}
