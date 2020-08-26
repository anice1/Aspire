<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='Role';

    public function admins(){
        return $this->hasMany('App\SchoolAdmin', 'role_id');
    }

    public function teachers(){
        return $this->hasMany('App\Teacher', 'role_id');
    }

    public function students(){
        return $this->hasMany('App\Student', 'role_id');
    }
}
