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
                    <a class="nav-link spartan" href="./../index.php">Kilépés</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section class="mx-5 mt-2 p-5 bg-light grey-white">
    <h3 class="spartan">Versenyek</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Név</th>
            <th scope="col">Időpont</th>
            <th scope="col">Műveletek</th>
        </tr>
        <tr>
            <td colspan="3">
                <a href="./tornament/tournament.php" class="btn px-5 black-button spartan">Létrehozás</a>
            </td>
        </tr>
    </table>
    <h3 class="spartan">Játékosok</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Név</th>
            <th scope="col">Email</th>
            <th scope="col">Verseny</th>
        </tr>
    </table>
    <h3 class="spartan">Eredmények</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Név</th>
            <th scope="col">Versenyek</th>
            <th scope="col">Eredmény</th>
        </tr>
    </table>
</section>

<?php include __DIR__.'../includes/script.php'; ?>
</body>
</html>
