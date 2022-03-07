<!doctype html>
<html lang="en">
<?php include __DIR__ . '/../includes/header.php'; ?>
<body>

<?php
$navbarItems = [
    '/logout' => 'Kijelentkezés'
];
include __DIR__ . '/../includes/navigation.php';
use App\Game;
?>
<section class="mx-5 mt-2 p-5 bg-light grey-white">
    <h3 class="spartan">Mérkőzések</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Mérkőzés ID</th>
            <th scope="col">Forduló</th>
            <th scope="col">Játékos 1</th>
            <th scope="col">Játékos 2</th>
            <th scope="col">Eredmény</th>
        </tr>
        <?php
        $game = new Game();

        $matches = $game->showMatches();

        if (isset($matches)){
            if (is_array($matches)) {
                foreach ($matches as $match){
                    echo '<tr>
                            <td>'.$match['match_id'].'</td>
                            <td>'.$match['turn_number'].'</td>
                            <td>'.$match['name1'].'</td>
                            <td>'.$match['name2'].'</td>
                            <td>'.$match['status'].'</td>
                          </tr>';
                }
            }
        }
        ?>
    </table>
</section>
<section class="mx-5 mt-2 p-5 bg-light grey-white">
    <h3 class="spartan">Csatlakozás</h3>
    <ul class="list-group list-group-horizontal d-flex justify-content-between">
        <li><h6  class="grotesk">Meccs kód</h6></li>
        <li><div>
                <input type="text" class="form-control" id="matchCode">
            </div></li>
        <li><button type="submit" class="btn black-button mt-0 spartan">Csatlakozás</button></li>
    </ul>
</section>
<section class="mx-5 mt-2 p-5 bg-light grey-white">
    <h3 class="spartan">Meccs eredmény</h3>
    <form method="post" action="/record-result" class="record-result">
    <ul class="list-group list-group-horizontal d-flex justify-content-between">
        <li><h6 class="grotesk">Mérkőzés ID</h6></li>
        <li><div>
                <input type="text" class="form-control" id="matchId" name="matchId">
            </div></li>
        <li><h6 class="grotesk">Meccs eredmény</h6></li>
        <li><div>
                <select class="form-select" aria-label="Default select example" name="result">
                    <option selected>Válassz egy eredményt</option>
                    <option value="WL">Nyertem</option>
                    <option value="LW">Vesztettem</option>
                    <option value="TT">Döntetlen lett</option>
                </select>
            </div></li>
        <li><button type="submit" class="btn black-button mt-0 spartan">Rögzítés</button></li>
    </ul>
    </form>
</section>
<?php include __DIR__ . '/../includes/script.php'; ?>
</body>
</html>
