<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
	/**
	 * Fields that aren't mass assignable.
	 * 
	 * @var Array
	 */
	protected $guarded = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	/**
	 * This patient was added by this user.
	 * 
	 * @return BelongsTo
	 */
	public function addedBy()
	{
		return $this->belongsTo('App\User', 'added_by');
	}

	/**
	 * This patient information was updated by this user.
	 * 
	 * @return BelongsTo
	 */
	public function updatedBy()
	{
		return $this->belongsTo('App\User', 'updated_by');
	}

	/**
	 * This patient has a health examination record.
	 * 
	 * @return HasOne
	 */
	public function healthExaminationRecord()
	{
		return $this->hasOne('App\HealthExaminationRecord');
	}
}
