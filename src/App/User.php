<?php

namespace App;

class User
{
    public function index(): View
    {
        return View::make('index', ['title' => 'Home Page', 'invoice' => $invoiceModel->find($invoiceId)]);
    }

    public function signUp(string $competitionId)
    {

    }

    public function registerResult(string $matchId)
    {

    }

}