<?php

namespace App;

class Tournament
{
    public function tournament(): View
    {
        return View::make('tournament', 'tournament/', ['title' => 'Versenysorozatok adminisztrációs felülete']);
    }

    public function newTournament(): View
    {
        return View::make('create-tournament', 'tournament/', ['title' => 'Versenysorozatok adminisztrációs felülete']);
    }

    public function create(int $minPlayers, int $maxPlayers, int $rounds)
    {

    }

    public function open()
    {

    }

    public function close()
    {

    }

    public function drawRound(int $players)
    {

    }

}