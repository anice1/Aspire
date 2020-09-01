<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use SoftDeletes;


    protected $table='teacher';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'firstname', 'lastname',
        'dob', 'gender', 
        'class', 'phone',
        'blood_group', 'religion',
        'class','address','phone','bio',
    ];



    public function roles(){
        return $this->belongsTo('App\Role');
    }

    public function user(){
        return $this->hasOne('App\User', 'user_id');
    }
}



