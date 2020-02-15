<?php

namespace App\Repositories;

interface TeamRepositoryInterface
{
    public  function all();

    public  function rankAll();

    public function store($name);

    public function won($team_id);

    public function drawn($team_id);

    public function lost($team_id);

}