<!doctype html>
<html lang="en">
<?php include __DIR__.'../includes/header.php'; ?>
<body>
<nav class="navbar navbar-expand-lg navbar-light grey-medium d-flex justify-content-between">
    <div class="container-fluid mx-5">
        <h5 class="spartan">Create tournament</h5>
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
<section class="d-flex justify-content-center align-items-center h-100">
    <div class="d-flex justify-content-center form-height">
        <form class="p-5 grey-white">
            <div class="mx-3 d-flex justify-content-center">
                <h1 class="spartan">Új verseny</h1>
            </div>
            <div class="mx-3 my-2">
                <label for="exampleInputPassword1" class="form-label d-flex justify-content-center grotesk">Név</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mx-3 my-2">
                <label for="exampleInputPassword1" class="form-label d-flex justify-content-center grotesk">Dátum</label>
                <input type="date" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mx-3 my-2">
                <label for="player" class="form-label d-flex justify-content-center grotesk">Játékosok száma</label>
                <input type="number"  class="form-control" id="tentacles" name="player"
                       min="10" max="10000">
            </div>
            <div class="mx-3 my-2">
                <label for="round" class="form-label d-flex justify-content-center grotesk">Fordulók száma</label>
                <input type="number"  class="form-control" id="tentacles" name="round"
                       min="10" max="100">
            </div>
            <div class="mx-2 my-2   d-flex justify-content-center">
                <button type="submit" class="btn px-5 black-button spartan">Létrehoz</button>
            </div>
        </form>
    </div>
</section>
<?php include __DIR__.'../includes/script.php'; ?></script>
</body>
</html>