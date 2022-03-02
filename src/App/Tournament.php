<?php

namespace App;

use PDO;

class Tournament extends Model
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
                'INSERT INTO games (game_type, game_name, min_players, reg_start_date, start_date, stop_date, total_turns)
                        VALUES("FIX FORDULÓSZÁM", ?, ?, ?, DATE("9999-12-30"), DATE("9999-12-31"), ?)'
            );

            $stmt->execute([$tournamentName, $players, $tournamentDate, $rounds]);
            return View::make('profile', 'login/', ['title' => 'Felhasználói fiók']);
        }
        return 'Minden mező kitötése kötelező!';
    }

    public function showTournaments()
    {
        $query = "SELECT * FROM games";
        $stmt = $this->db->query($query);
        $games = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($games))
        {
            return 'Jelenleg nincs megjeleníthető verseny!';
        }

        return $games;
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