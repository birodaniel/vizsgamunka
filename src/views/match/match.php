<!doctype html>
<html lang="en">
<?php include __DIR__.'../includes/header.php'; ?>
<body>
<nav class="navbar navbar-expand-lg navbar-light grey-medium d-flex justify-content-between">
    <div class="container-fluid mx-5">
        <h5 class="spartan"><?= $title ?></h5>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link spartan" href="#">Kilépés</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
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
<?php include __DIR__.'../includes/script.php'; ?></script>
</body>
</html>
