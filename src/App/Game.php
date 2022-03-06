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

    public function validateResult()
    {

    }

}