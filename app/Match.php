<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    //
    protected  $table = 'matches';
    public $timestamps = true;
    protected $fillable = array('team_a_id','team_b_id','team_a_score','team_b_score');

    public function teamA()
    {
        return $this->belongsTo('App\Team', 'team_a_id');
    }

    public function teamB()
    {
        return $this->belongsTo('App\Team','team_b_id');
    }
}
