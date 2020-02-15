<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected  $table = 'teams';
    public $timestamps = true;
    protected $fillable = array('name','played','won','drawn','lost','points');

    public function matches()
    {
        return $this->hasMany('App\Match');
    }
}
