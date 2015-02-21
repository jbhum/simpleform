<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class response extends Model {

	protected $fillable = [
		'name',
		'email',
		'phone',
		'comments',
		'reason',
		'respond',
		'date'
	];

}
