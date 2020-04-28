<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Ippis
 *
 * @property int $id
 * @property int $user_id
 * @property string $ministry_name
 * @property string $employee_name
 * @property string $employee_number
 * @property string $mobile_phone
 * @property string $email
 * @property float $netpay
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ippis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ippis whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ippis whereEmployeeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ippis whereEmployeeNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ippis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ippis whereMinistryName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ippis whereMobilePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ippis whereNetpay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ippis whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Ippis whereUserId($value)
 * @mixin \Eloquent
 */
class Ippis extends Model
{
    protected $guarded = [];
}
