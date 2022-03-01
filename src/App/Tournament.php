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

    public function create(): View|string
    {
        $tournamentName = filter_input(INPUT_POST, 'tournamentName');
        $tournamentDate = filter_input(INPUT_POST, 'tournamentDate');
        $players = filter_input(INPUT_POST, 'players');
        $rounds = filter_input(INPUT_POST, 'rounds');

        if (isset($tournamentName) && isset($tournamentDate) && isset($players) && isset($rounds)) {
            $stmt = $this->db->prepare(
                'INSERT INTO games (game_type, game_name, min_players, reg_start_date, total_turns)
                        VALUES("FIX FORDULÓSZÁM", ?, ?, ?, ?)'
            );

            $stmt->execute([$tournamentName, $players, $tournamentDate, $rounds]);
            return View::make('tournament', 'tournament/', ['title' => 'Versenysorozatok adminisztrációs felülete']);
        }
        return 'Minden mező kitötése kötelező!';
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