<!doctype html>
<html lang="en">
<?php include __DIR__.'../includes/header.php'; ?>
<body>
<?php include __DIR__.'../includes/navigation.php'; ?>
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
<?php include __DIR__.'../includes/script.php'; ?>
</body>
</html>