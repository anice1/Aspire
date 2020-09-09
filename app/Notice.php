<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notice';

    protected $fillable = [
        'title','message','postedBy',
    ];



    public function school(){
        $this->belongsTo('App\School');
    }
}
