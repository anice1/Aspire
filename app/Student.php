<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $table = 'student';
    protected $fillable = [
        'user_id','firstname', 'lastname', 'othernames',
        'dob', 'email', 'class', 'gender', 'guardian','guardian_phone','guardian_email','guardian_occupation', 'address', 'password',


    ];
    protected $dates = ['deleted_at'];



    public function roles(){
        return $this->belongsTo('App\Role');
    }
    public function user() {
        return $this->morphOne('App\User', 'userable');
    }
}
