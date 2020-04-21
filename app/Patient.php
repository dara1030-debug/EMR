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
	 * Relationships always get called in Model.
	 * 
	 * @var Array
	 */
	protected $with = [
		'healthExaminationRecord',
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

	/**
	 * Checks if patient has this past medical history.
	 * 
	 * @param String $data
	 * @return Boolean
	 */
	public function hasPastMedicalHistory($data)
	{
		return in_array($data, 
			$this->healthExaminationRecord
				->past_medical_history['pastmedical_history']
		);
	}

	/**
	 * Gets the menstrual pattern of a patient.
	 * 
	 * @return String
	 */
	public function getMenstrualPattern()
	{
		return $this->healthExaminationRecord
			->past_medical_history['menstrual_pattern'];
	}

	/**
	 * Gets the last menstrual period of a patient.
	 * 
	 * @return String
	 */
	public function getLastMenstrualPeriod()
	{
		return $this->healthExaminationRecord
			->past_medical_history['last_menstrual_period'];
	}
}
