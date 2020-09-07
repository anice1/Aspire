<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;
use Iatstuti\Database\Support\CascadeSoftDeletes;

class School extends Model
{
    use SoftDeletes; 
    use CascadeSoftDeletes; 
    
    protected $table = 'school';
    
    protected $cascadeDeletes = ['teachers','students'];
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'school_name',
        'email',
        'phone',
        'school_address',
        'firstname',
        'lastname',
        'gender',
        'owner_address',
        'password',
        'bio',
        'photo',
    ];
    
    
    public function teachers(){
        return $this->hasMany('App\Teacher','school_id');
    }
    
    public function students(){
        return $this->hasMany('App\Student','school_id');
    }
    
    public function class(){
        return $this->hasMany('App\Class','school_id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
