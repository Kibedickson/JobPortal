<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','contact',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jobs(){
        return $this->belongsToMany(Jobs::class);
    }

    public function roles(){
        return $this->belongsToMany(Roles::class);
    }

    public function resume(){
        return $this->hasOne(Resumes::class);
    }

    public function isEmployer(){
        return $this->roles()->where('id', 2)->count()>0;
    }
    public function isCandidate(){
        return $this->roles()->where('id', 3)->count()>0;
    }

}

