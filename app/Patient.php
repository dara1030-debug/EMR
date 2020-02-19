<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	protected $guarded = [];

	public function auth_by()
	{
		return $this->belongsTo('App\User', 'auth_by');
	}

	public function updated_by()
	{
		return $this->belongsTo('App\User', 'updated_by');
	}
}
