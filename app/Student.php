<?php

namespace App;
use App\user;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;


class Student extends Model
{
    use softDeletes;
    use CascadeSoftDeletes; 

    
    protected $table = 'student';
    protected $fillable = [

        'user_id','dob', 'firstname',
        'lastname','email', 'class', 'gender', 
        'guardian','phone', 'guardian_phone',
        'guardian_email','guardian_occupation',
        'bio', 'address', 'password',
    ];

    protected $cascadeDeletes = ['user'];
    protected $dates = ['deleted_at'];



    public function roles(){
        return $this->belongsTo('App\Role');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function school(){
        return $this->belongsTo('App\School');
    }
}
