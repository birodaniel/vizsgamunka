<!doctype html>
<html lang="en">
<?php include __DIR__ . '/../includes/header.php'; ?>
<body>

<?php
$navbarItems = [
    '/profile' => 'Vissza',
    '/logout' => 'Kijelentkezés'
];
include __DIR__ . '/../includes/navigation.php'; ?>
<?php
require_once './vizsgamunka/src/App/DB.php';

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
?>
<section class="d-flex justify-content-center align-items-center h-100">
    <div class="d-flex justify-content-center form-height">
        <form class="p-5 grey-white" method="post" action="/update-tournament">
            <div class="mx-3 d-flex justify-content-center">
                <h3 class="spartan">Verseny módosítása</h3>
            </div>
            <div class="mx-3 my-2">
                <label for="tournamentName" class="form-label d-flex justify-content-center grotesk">Verseny neve</label>
                <input type="text" class="form-control" id="tournamentName" name="tournamentName" value="<?php echo htmlspecialchars($row['game_name']) ?>" required>
            </div>
            <div class="mx-3 my-2">
                <label for="registrationDate" class="form-label d-flex justify-content-center grotesk">Regisztráció dátuma</label>
                <input type="date" class="form-control" id="registrationDate" name="registrationDate"  min="<?php new DateTime("now"); ?>" value="<?php echo htmlspecialchars($row['req_start_date']) ?>">
            </div>
            <div class="mx-3 my-2">
                <label for="tournamentStartDate" class="form-label d-flex justify-content-center grotesk">Verseny kezdete</label>
                <input type="date" class="form-control" id="tournamentStartDate" name="tournamentStartDate"  min="<?php new DateTime("now"); ?>" value="<?php echo htmlspecialchars($row['start_date']) ?>">
            </div>
            <div class="mx-3 my-2">
                <label for="tournamentEndDate" class="form-label d-flex justify-content-center grotesk">Verseny vége</label>
                <input type="date" class="form-control" id="tournamentEndDate" name="tournamentEndDate"  min="<?php new DateTime("now"); ?>" value="<?php echo htmlspecialchars($row['stop_date']) ?>">
            </div>
            <div class="mx-3 my-2">
                <label for="minPlayers" class="form-label d-flex justify-content-center grotesk">Játékosok minimum száma</label>
                <input type="number"  class="form-control" id="minPlayers" name="minPlayers"
                       min="10" max="10000" value="<?php echo htmlspecialchars($row['min_players']) ?>">
            </div>
            <div class="mx-3 my-2">
                <label for="maxPlayers" class="form-label d-flex justify-content-center grotesk">Játékosok maximum száma</label>
                <input type="number"  class="form-control" id="maxPlayers" name="maxPlayers"
                       min="10" max="10000" value="<?php echo htmlspecialchars($row['max_players']) ?>">
            </div>
            <div class="mx-3 my-2">
                <label for="rounds" class="form-label d-flex justify-content-center grotesk">Fordulók száma</label>
                <input type="number"  class="form-control" id="rounds" name="rounds"
                       min="10" max="100" value="<?php echo htmlspecialchars($row['total_turns']) ?>">
            </div>
            <div class="mx-2 my-2   d-flex justify-content-center">
                <button type="submit" class="btn px-5 lime-button spartan">Módosít</button>
            </div>
        </form>
    </div>
</section>
<?php include __DIR__ . '/../includes/script.php'; ?>
</body>
</html>
