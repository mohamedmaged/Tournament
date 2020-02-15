<?php

namespace App\Repositories;

use App\Match;

class MatchRepository implements MatchRepositoryInterface
{


    public function all()
    {
        return Match::all();

    }

    public function store($matchData)
    {
//        dd($matchData);
        // TODO: Implement store() method.

        $match = Match::create($matchData);
    }

}