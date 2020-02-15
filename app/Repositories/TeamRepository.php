<?php

namespace App\Repositories;

use App\Team;
use Illuminate\Support\Facades\DB;

class TeamRepository implements TeamRepositoryInterface
{
    private $wonPoints =3;
    private $lostPoints=0;
    private $drawnPoints=1;

    public function all()
    {
        // TODO: Implement all() method.
        return Team::all();
    }

    public  function rankAll()
    {
        return Team::orderBy('points', 'DESC')->get();
    }

    public function  store($name)
    {
        $newTeam = new Team([
            'name'=>$name
        ]);
        $newTeam->save();

    }


    public  function lost($team_id)
    {
        // TODO: Implement lost() method.
        $team = Team::where('id',$team_id)->first();
        $team->played= $team->played+1;
        $team->lost = $team->lost+1;
        $team->points = $team->points+$this->lostPoints;
        $team->save();

    }

    public function drawn($team_id)
    {
        // TODO: Implement drawn() method.
        $team = Team::where('id',$team_id)->first();
        $team->played= $team->played+1;
        $team->drawn = $team->drawn+1;
        $team->points = $team->points+$this->drawnPoints;
        $team->save();

    }

    public function won($team_id)
    {
        // TODO: Implement won() method.
        $team = Team::where('id',$team_id)->first();
        $team->played= $team->played+1;
        $team->won = $team->won+1;
        $team->points = $team->points+$this->wonPoints;
        $team->save();
    }


}