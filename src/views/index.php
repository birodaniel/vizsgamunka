<!doctype html>
<html lang="en">
<?php use App\Tournament;

include __DIR__.'/includes/header.php'; ?>
<body>

<?php
$navbarItems = [
        '/login' => 'Bejelentkezés',
        '/register' => 'Regisztráció'
        ];
include __DIR__.'/includes/navigation.php'; ?>

<section class="mx-5 mt-2 p-5 bg-light grey-white">
    <h3 class="spartan">Versenyek</h3>
    <p>Jelentkezéshez lépj be vagy regisztrálj!</p>
    <table class="table grotesk">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Megnevezés</th>
            <th scope="col">Kategória</th>
            <th scope="col">Kezdés</th>
            <th scope="col">Befejezés</th>
        </tr>
        <?php
        $tournament = new Tournament();

        $games = $tournament->showTournaments();

        if (isset($games))
        {
            if (is_array($games))
            {
                foreach ($games as $game)
                {
                    echo '<tr>
                                <th scope="col">'.$game['game_id'].'</th>
                                <th scope="col">'.$game['game_name'].'</th>
                                <th scope="col">'.$game['game_type'].'</th>
                                <th scope="col">'.$game['start_date'].'</th>
                                <th scope="col">'.$game['stop_date'].'</th>
                             </tr>';
                }
            }
        }
        ?>
    </table>
</section>

<!--
<?php
/*require_once '../App/DB.php';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $sql = 'SELECT lastname,
                    firstname,
                    jobtitle
               FROM employees
              ORDER BY lastname';

    $q = $pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
*/?>
<section class="mx-5 mt-2 p-5 bg-light grey-white">
    <h3 class="spartan">Ponttáblázat</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Név</th>
            <th scope="col">Meccsszám</th>
            <th scope="col">Győzelem</th>
            <th scope="col">Döntetlen</th>
            <th scope="col">Vereség</th>
            <th scope="col">Pontszám</th>
        </tr>
        <?php /*if (!$sql) {*/?>
            <tr>
                <td colspan="5">Nincsenek fordulók</td>
            </tr>
        <?php /*}  else {*/?>

            <?php /*while ($row = $q->fetch()): */?>
                <tr>
                    <td><?php /*echo htmlspecialchars($row['match_id']) */?></td>
                    <td><?php /*echo htmlspecialchars($row['turn_id']) */?></td>
                    <td><?php /*echo htmlspecialchars($row['result1']); */?></td>
                    <td><?php /*echo htmlspecialchars($row['result2']); */?></td>
                </tr>
            <?php /*endwhile; */?>
        <?php /*} */?>
    </table>
</section>-->
<?php include __DIR__.'/includes/script.php'; ?>
</body>
</html>
