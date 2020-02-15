<?php

namespace App\Http\Controllers;

use App\Repositories\MatchRepositoryInterface;
use App\Repositories\TeamRepositoryInterface;
use Illuminate\Http\Request;

class MatchController extends Controller
{

    protected $match;
    protected $team;

    /**
     * MatchController constructor.
     * @param MatchRepositoryInterface $match
     * @param TeamRespositoryInterface $team
     */
    public function __construct(MatchRepositoryInterface $match, TeamRepositoryInterface $team)
    {
        $this->match = $match ;
        $this->team= $team;
    }

    /**
     *
     */
    public function create()
    {
        $teams = $this->team->all();

        return view('match',compact('teams'));
    }

    /**
     * @param Request $request
     */public function store(Request $request)
    {
        $validator =
            $request->validate(
            [
                'team_a_id'=> 'required|exists:teams,id|different:team_b_id',
                'team_b_id'=> 'required|exists:teams,id|different:team_a_id',
                'team_a_score'=>'required|integer|min:0|max:20',
                'team_b_score'=>'required|integer|min:0|max:20',

            ]
        );
        $this->match->store($request->all());

        if($request->team_a_score > $request->team_b_score )
        {
            $this->team->won($request->team_a_id);
            $this->team->lost($request->team_b_id);

        }
        elseif ($request->team_a_score == $request->team_b_score)
        {
            $this->team->drawn($request->team_a_id);
            $this->team->drawn($request->team_b_id);
        }
        elseif ($request->team_a_score < $request->team_b_score)
        {
            $this->team->lost($request->team_a_id);
            $this->team->won($request->team_b_id);
        }

        return redirect()->back()->with('success','Created Successfully');
    }


}
