<!doctype html>
<html lang="en">
<?php include __DIR__.'../includes/header.php'; ?>
<body>
<?php include __DIR__.'../includes/navigation.php'; ?>
<section class="mx-5 mt-2 p-5 bg-light grey-white">
    <h3 class="spartan">Meccs kódok</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Versenyek</th>
            <th scope="col">Fordulók</th>
            <th scope="col">Meccs kódok</th>
        </tr>
    </table>

    <h3 class="spartan">Csatlakozás</h3>
    <ul class="list-group list-group-horizontal d-flex justify-content-between">
        <li><h6  class="grotesk">Meccs kód</h6></li>
        <li><div>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div></li>
        <li><button type="submit" class="btn black-button mt-0 spartan">Csatlakozás</button></li>
    </ul>
    <h3 class="spartan">Meccs eredmény</h3>
    <ul class="list-group list-group-horizontal d-flex justify-content-between">
        <li><h6 class="grotesk">Meccs kód</h6></li>
        <li><div>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div></li>
        <li><h6 class="grotesk">Meccs eredmény</h6></li>
        <li><div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Válassz egy eredményt</option>
                    <option value="1">Nyertem</option>
                    <option value="2">Vesztettem</option>
                    <option value="3">Döntetlen lett</option>
                </select>
            </div></li>
        <li><button type="submit" class="btn black-button mt-0 spartan">Rögzítés</button></li>
    </ul>
</section>
<?php include __DIR__.'../includes/script.php'; ?>
</body>
</html>
