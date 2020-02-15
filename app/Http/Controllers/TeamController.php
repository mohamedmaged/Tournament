<?php

namespace App\Http\Controllers;

use App\Repositories\TeamRepositoryInterface;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class TeamController extends Controller
{
    //
    protected $team;

    /**
     * Team Controller constructor.
     *
     * @param TeamRespositoryInterface $team
     */
    public function __construct(TeamRepositoryInterface $team)
    {
        $this->team = $team;
    }

    public function  index()
    {
       $teams= $this->team->rankAll();

       return View('rank')->with(['teams'=>$teams]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function  create()
    {
        return View('team');
    }

    public function  store(Request $request)
    {
        $validator =
            $request->validate(
            [
                'name'=> 'string|required|alpha_num|min:3|max:40'
            ]
        );
        $this->team->store($request->name);

    return redirect()->back()->with('success','Created Successfully');

    }


}
