<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entry
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $email
 * @property string $name
 * @property string $info
 * @property integer $level
 * @property integer $state_id
 * @property integer $category_id
 * @property integer $project_id
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereInfo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereLevel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereStateId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereCategoryId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereProjectId($value)
 */
class Entry extends Model
{
    //
}
