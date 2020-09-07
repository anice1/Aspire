<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Iatstuti\Database\Support\CascadeSoftDeletes;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;
    use SoftDeletes;
    use CascadeSoftDeletes; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'user_id','firstname','lastname', 'email', 'password',
        'username', 'email', 'password',
    ];

    protected $cascadeDeletes = ['school'];
    protected $dates = ['deleted_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

    ];


    public function teacher(){
        return $this->hasOne('App\Teacher', 'user_id');
    }

    public function student() {
        return $this->hasOne('App\Student', 'user_id');
    }

    public function school() {
        return $this->hasOne('App\School', 'user_id');
    }
}
