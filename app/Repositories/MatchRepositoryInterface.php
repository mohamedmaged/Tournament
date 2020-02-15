<?php

namespace App\Repositories;

interface MatchRepositoryInterface
{
    public function all();
    public function store($matchData);
}