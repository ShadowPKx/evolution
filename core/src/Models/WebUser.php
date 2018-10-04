<?php namespace EvolutionCMS\Models;

use Illuminate\Database\Eloquent;
use EvolutionCMS\Traits;

/**
 * EvolutionCMS\Models\WebUser
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $cachepwd
 *
 * @mixin \Eloquent
 */
class WebUser extends Eloquent\Model
{
    use Traits\Models\ManagerActions;

	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'username',
		'password',
		'cachepwd'
	];
}