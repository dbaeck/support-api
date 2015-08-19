<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\State
 *
 * @property integer $id
 * @property string $name
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\State whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\State whereUpdatedAt($value)
 */
class State extends Model
{
    //
}
