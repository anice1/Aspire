<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;


    protected $table='teacher';
    protected $dates = ['deleted_at'];




    public function roles(){
        return $this->belongsTo('App\Role');
    }
}



