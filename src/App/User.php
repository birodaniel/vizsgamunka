<?php

namespace App;

class User
{
    public function index(): View
    {
        return View::make('index', ['title' => 'Home Page']);
    }

    public function register(): View
    {
        return View::make('register', ['title' => 'Regisztráció']);
    }

    public function signUp(string $competitionId)
    {

    }

    public function registerResult(string $matchId)
    {

    }

}