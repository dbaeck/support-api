<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Category
 *
 * @property integer $id
 * @property string $name
 * @property integer $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereUpdatedAt($value)
 */
	class Category {}
}

namespace App{
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
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Entry whereUpdatedAt($value)
 */
	class Entry {}
}

namespace App{
/**
 * App\Project
 *
 * @property integer $id
 * @property string $name
 * @property integer $user_id
 * @property boolean $is_active
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Project whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Project whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Project whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Project whereIsActive($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Project whereUpdatedAt($value)
 */
	class Project {}
}

namespace App{
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
	class State {}
}

namespace App{
/**
 * App\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $api_key
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereApiKey($value)
 */
	class User {}
}

