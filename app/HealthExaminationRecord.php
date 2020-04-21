<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HealthExaminationRecord extends Model
{
    /**
     * The fields that are not mass-asssignable.
     * 
     * @var Array
     */
    protected $guarded = [
        'created_at',
        'updated_at'
    ];

    /**
     * The fields get casted to a custom data-type.
     * 
     * @var Array
     */
    protected $casts = [
        'past_medical_history' => 'array',
        'family_history' => 'array',
        'social_history' => 'array',
        'phyiscal_examination' => 'array',
        'vital_signs' => 'array',
        'assessment' => 'array',
    ];

    /**
     * This health examination belongs to a Patient.
     * 
     * @return BelongsTo
     */
    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
}
