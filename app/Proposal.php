<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    public function job(){
        return $this->belongsTo(Job::class, 'job_id');
    }

    public function candidate(){
        return $this->belongsTo(User::class, 'candidate_id');
    }
}