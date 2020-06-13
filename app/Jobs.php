<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $guarded = [];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function employer(){
        return $this->belongsTo(User::class, 'employer_id');
    }
public function candidate(){
        return $this->belongsTo(User::class, 'candidate_id');
    }

}
