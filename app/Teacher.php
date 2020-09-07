<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;


class Teacher extends Model
{
    use SoftDeletes;
    use CascadeSoftDeletes; 


    protected $table='teacher';

    protected $cascadeDeletes = ['user'];
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id',   
        'firstname', 'lastname',
        'dob', 'gender', 
        'class', 'phone',
        'blood_group', 'religion',
        'class','address','phone','bio',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function school(){
        return $this->belongsTo('App\School');
    }
}



