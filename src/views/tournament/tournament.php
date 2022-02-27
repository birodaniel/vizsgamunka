<!doctype html>
<html lang="en">
<?php include __DIR__.'../includes/header.php'; ?>
<body>
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
    <h3 class="spartan">Fordulók</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Meccskód</th>
            <th scope="col">Forduló száma</th>
            <th scope="col">Nyertes neve</th>
            <th scope="col">Vesztes neve</th>
            <th scope="col">Döntetlen</th>
        </tr>
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
    </table>
    <h3 class="spartan">Játékosok</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Név</th>
            <th scope="col">Email</th>
            <th scope="col">Meccsszám</th>
            <th scope="col">Pontszám</th>
        </tr>
    </table>
</section>
<?php include __DIR__.'../includes/script.php'; ?></script>
</body>
</html>