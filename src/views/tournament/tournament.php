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
    <h3 class="spartan">Fordulók</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Meccskód</th>
            <th scope="col">Forduló száma</th>
            <th scope="col">Nyertes neve</th>
            <th scope="col">Vesztes neve</th>
            <th scope="col">Döntetlen</th>
        </tr>
        <?php if (!$sql) {?>
            <tr>
                <td colspan="5">Nincsenek fordulók</td>
            </tr>
        <?php }  else {?>

        <?php while ($row = $q->fetch()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['match_id']) ?></td>
                <td><?php echo htmlspecialchars($row['turn_id']) ?></td>
                <td><?php echo htmlspecialchars($row['result1']); ?></td>
                <td><?php echo htmlspecialchars($row['result2']); ?></td>
            </tr>
        <?php endwhile; ?>
        <?php } ?>
    </table>
    <h3 class="spartan">Ponttáblázat</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Név</th>
            <th scope="col">Győzelem</th>
            <th scope="col">Döntetlen</th>
            <th scope="col">Vereség</th>
            <th scope="col">Pontszám</th>
        </tr>
        <?php if (!$sql) {?>
            <tr>
                <td colspan="5">Nincsenek pontok</td>
            </tr>
        <?php }  else {?>

            <?php while ($row = $q->fetch()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['user_name']) ?></td>
                    <td><?php echo htmlspecialchars($row['firstname']); ?></td>
                    <td><?php echo htmlspecialchars($row['points']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php } ?>
    </table>
    <h3 class="spartan">Játékosok</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Név</th>
            <th scope="col">Email</th>
            <th scope="col">Meccsszám</th>
            <th scope="col">Pontszám</th>
        </tr>
        <?php if (!$sql) {?>
            <tr>
                <td colspan="5">Nincsenek játékosok</td>
            </tr>
        <?php }  else {?>

            <?php while ($row = $q->fetch()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['user_name']) ?></td>
                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                    <td><?php echo htmlspecialchars($row['matched']); ?></td>
                    <td><?php echo htmlspecialchars($row['points']); ?></td>
                </tr>
            <?php endwhile; ?>
        <?php } ?>
    </table>
</section>
<?php include __DIR__ . '/../includes/script.php'; ?>
</body>
</html>
