<?php

namespace App;

use PDO;

class Game extends Model
{
    public function index(): View
    {
        $tournamentName = filter_input(INPUT_POST, 'tournamentName');
        return View::make('match', 'match/', ['title' => $tournamentName]);
    }

    public function result(): View
    {
        $tournamentName = filter_input(INPUT_POST, 'tournamentName');

        $this->recordResult();
        $this->validateResult();
        //header('Location: ' . '/match', true);
        return View::make('match', 'match/', ['title' => $tournamentName]);
    }

    public function showMatches(): string|array
    {
        $tournamentId = filter_input(INPUT_POST, 'tournamentId');

        $query = "SELECT m.match_id as match_id,
                         t.turn_number as turn_number,
                         pu1.name as name1,
                         pu2.name as name2,
                         m.status as status
                  FROM tournament_turns t
                  JOIN matches m ON t.turn_id = m.turn_id
                  JOIN pusers pu1 ON m.player1 = pu1.user_id
                  JOIN pusers pu2 ON m.player2 = pu2.user_id
                  WHERE t.tournament_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$tournamentId]);
        $matches = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($matches))
        {
            return 'Ehhez a versenyhez jelenleg nem tartoznak mérkőzések!';
        }

        return $matches;
    }

    public function recordResult(): string
    {
        $userId = $_SESSION['user_id'];
        $matchId = filter_input(INPUT_POST, 'matchId');
        $result = filter_input(INPUT_POST, 'result');

        // same parameter is not allowed multiple times in query execution
        $player1 = $userId;
        $player2 = $userId;

        $query = "SELECT * FROM matches WHERE match_id = ? AND (player1 = ? OR player2 = ?)";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$matchId, $player1, $player2]);
        $match = $stmt->fetchAll(PDO::FETCH_ASSOC)[0] ?? null;

        if (!isset($match)) {
            return 'Ehhez a mérkőzés azonosítóhoz egyik meccsed sem tartozik!';
        }
        if($match['status'] === 'valid'){
            return 'Az eredményt már mindkét fél rögzítette és érvényes is!';
        }
        if ($match['player1'] === $userId){
            $stmt = $this->db->prepare(
                'UPDATE matches SET result1 = ? WHERE match_id = ?'
            );
            $stmt->execute([$result, $matchId]);
            return 'Eredmény sikeresen rögzítve!';
        }
        if ($match['player2'] === $userId){
            $stmt = $this->db->prepare(
                'UPDATE matches SET result2 = ? WHERE match_id = ?'
            );
            $stmt->execute([$result, $matchId]);
            return 'Eredmény sikeresen rögzítve!';
        } else {
            return 'Valami hiba történt.';
        }
    }

    public function validateResult()
    {
        $matchId = filter_input(INPUT_POST, 'matchId');

        $query = "SELECT * FROM matches WHERE match_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->execute([$matchId]);
        $match = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];

        if ($match['result1'] === 'WL' && $match['result2'] === 'LW' ||
            $match['result1'] === 'LW' && $match['result2'] === 'WL' ||
            $match['result1'] === 'TT' && $match['result2'] === 'TT'){
                $query = "UPDATE matches SET status = 'valid' WHERE match_id = ?";
                $stmt = $this->db->prepare($query);
                $stmt->execute([$matchId]);
                $message = 'Az eredmény érvényes!';
        } else {
            $message = 'Az eredmény még nem érvényes!';
        }

        return $message;
    }

}