<?php

namespace App\Models\Exceptions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


/**
 * App\Models\Tickets\Admin
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property string|null $last_logged_in
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Admin whereLastLoggedIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Admin whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tickets\Admin whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Admin extends Authenticatable
{
    //
}
