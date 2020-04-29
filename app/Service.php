<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    protected $with = [
        'addedBy'
    ];
    
    public function addedBy()
    {
        return $this->belongsTo('App\User', 'added_by');
    }
}
