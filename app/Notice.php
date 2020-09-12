<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notice';

    protected $fillable = [
        'title','message','postedBy',
    ];



    public function user(){
        $this->belongsTo('App\User');
    }

}
