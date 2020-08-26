<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='Role';

    public function admins(){
        return $this->hasMany('App\SchoolAdmin');
    }

    public function teachers(){
        return $this->hasMany('App\Teacher');
    }

    public function students(){
        return $this->hasMany('App\Student');
    }
}
