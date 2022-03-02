<!doctype html>
<html lang="en">
<?php include __DIR__ . '/../includes/header.php'; ?>
<body>

<?php
$navbarItems = [
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

<section class="mx-5 mt-2 p-5 bg-light grey-white">
    <h3 class="spartan">Versenyek</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Verseny neve</th>
            <th scope="col">Regisztrálás kezdete</th>
            <th scope="col">Verseny kezdete</th>
            <th scope="col">Verseny vége</th>
            <th scope="col">Fordulók száma</th>
            <th scope="col">Műveletek</th>
        </tr>
        <?php if (!$sql) {?>
            <tr>
                <td colspan="6">Nincsenek versenyek</td>
            </tr>
        <?php }  else {?>

            <?php while ($row = $q->fetch()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['game_name']) ?></td>
                    <td><?php echo htmlspecialchars($row['reg_start_date']) ?></td>
                    <td><?php echo htmlspecialchars($row['start_date']) ?></td>
                    <td><?php echo htmlspecialchars($row['stop_date']) ?></td>
                    <td><?php echo htmlspecialchars($row['total_turns']); ?></td>
                    <td><a href="/update" class="btn lime-button spartan">Szerkesztés</a>
                        <button type="submit" class="btn px-5 lime-button spartan">Törlés</button>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php } ?>
        <tr>
            <td colspan="6">
                <a href="/tournament" class="btn px-5 black-button spartan">Létrehozás</a>
            </td>
        </tr>
    </table>
    <h3 class="spartan">Játékosok</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Név</th>
            <th scope="col">Email</th>
            <th scope="col">Verseny neve</th>
            <th scope="col">Műveletek</th>
        </tr>
        <?php if (!$sql) {?>
            <tr>
                <td colspan="4">Nincsenek játékosok</td>
            </tr>
        <?php }  else {?>

            <?php while ($row = $q->fetch()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['username']) ?></td>
                    <td><?php echo htmlspecialchars($row['email']) ?></td>
                    <td><?php echo htmlspecialchars($row['game_name']) ?></td>
                    <td>
                        <button type="submit" class="btn px-5 lime-button spartan">Törlés</button>
                    </td>

                </tr>
            <?php endwhile; ?>
        <?php } ?>
    </table>
    <h3 class="spartan">Eredmények</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Játékos neve</th>
            <th scope="col">Email címe</th>
            <th scope="col">Verseny neve</th>
            <th scope="col">Pontok</th>
            <th scope="col">Meccsek</th>
        </tr>
        <?php if (!$sql) {?>
            <tr>
                <td colspan="5">Nincsenek eredmények</td>
            </tr>
        <?php }  else {?>

            <?php while ($row = $q->fetch()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['username']) ?></td>
                    <td><?php echo htmlspecialchars($row['email']) ?></td>
                    <td><?php echo htmlspecialchars($row['game_name']) ?></td>
                    <td><?php echo htmlspecialchars($row['points']) ?></td>
                    <td><?php echo htmlspecialchars($row['matched']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php } ?>
    </table>
</section>
<?php include __DIR__ . '/../includes/script.php'; ?>
</body>
</html>
