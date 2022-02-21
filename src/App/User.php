<?php

namespace App;

class User
{
    public function index(): View
    {
        return View::make('index', ['title' => 'Home Page']);
    }

    public function signUp(string $competitionId)
    {

    }

    public function registerResult(string $matchId)
    {

    }

}