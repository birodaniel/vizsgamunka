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
        $regDate = filter_input(INPUT_POST, 'registrationDate');
        $startDate = filter_input(INPUT_POST, 'tournamentStartDate');
        $endDate = filter_input(INPUT_POST, 'tournamentEndDate');
        $minPlayers = filter_input(INPUT_POST, 'minPlayers');
        $maxPlayers = filter_input(INPUT_POST, 'maxPlayers');
        $rounds = filter_input(INPUT_POST, 'rounds');

        if (isset($tournamentName) &&
            isset($regDate) &&
            isset($startDate)&&
            isset($endDate)&&
            isset($minPlayers)&&
            isset($maxPlayers) &&
            isset($rounds)) {
            $stmt = $this->db->prepare(
                'INSERT INTO tournaments (game_type, tournament_name, min_players, max_players, reg_start_date, start_date, stop_date, total_turns)
                        VALUES("FIX FORDULÓSZÁM", ?, ?, ?, ?, ?, ?, ?)'
            );

            $stmt->execute([$tournamentName, $minPlayers, $maxPlayers, $regDate, $startDate, $endDate, $rounds]);
            return View::make('profile', 'login/', ['title' => 'Felhasználói fiók']);
        }
        return 'Minden mező kitötése kötelező!';
    }

    public function showTournaments()
    {
        $query = "SELECT * FROM tournaments";
        $stmt = $this->db->query($query);
        $tournaments = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($tournaments))
        {
            return 'Jelenleg nincs megjeleníthető verseny!';
        }

        return $tournaments;
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