<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $table = 'student';
    protected $fillable = [
        'firstname', 'lastname', 'othernames',
        'dob', 'email', 'class', 'gender',
        'section', 'guardian', 'address', 'password',


    ];
    protected $dates = ['deleted_at'];



    public function roles(){
        return $this->belongsTo('App\Role');
    }
}
