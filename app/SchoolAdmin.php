<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolAdmin extends Model
{
    use SoftDeletes;


    protected $table='school_admin';
    protected $dates = ['deleted_at'];


    public function roles(){
        return $this->belongsTo('App\Role');
    }
}
