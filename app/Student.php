<?php

namespace App;
use App\user;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $table = 'student';
    protected $fillable = [
        'user_id','dob', 'email', 'class', 'gender', 'guardian','phone', 'guardian_phone','guardian_email','guardian_occupation', 'address', 'password',


    ];
    protected $dates = ['deleted_at'];



    public function roles(){
        return $this->belongsTo('App\Role');
    }
    public function user() {
        return $this->belongsTo('App\User');
    }
}
