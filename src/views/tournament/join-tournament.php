<!doctype html>
<html lang="en">
<?php include __DIR__ . '/../includes/header.php'; ?>
<body>

<?php
$navbarItems = [
    '/' => 'Vissza a nyitólapra'
];
include __DIR__ . '/../includes/navigation.php'; ?>

<section>
    <div class="d-flex justify-content-center">
        <form class="grey-medium p-5" method="post" action="/registration-success">
            <div class="mx-3 my-3  d-flex justify-content-center">
                <h1 class="spartan">Csatlakozás a versenyhez</h1>
            </div>
            <div class="mx-3 my-2">
                <label for="name" class="form-label d-flex justify-content-center grotesk">Verseny neve</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mx-3 my-2">
                <label for="username" class="form-label d-flex justify-content-center grotesk">Felhasználónév</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mx-3 my-2">
                <label for="email" class="form-label d-flex justify-content-center grotesk">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="termsAccepted" name="termsAccepted" required>
                <label class="form-check-label grotesk" for="termsAccepted">Általános adatvédelmi nyilatkozat elfogadása</label>
            </div>
            <div class="mx-3 my-2 d-flex justify-content-center">
                <button type="submit" class="btn px-5 lime-button spartan">Csatlakozás</button>
            </div>
        </form>
    </div>
</section>
<?php include __DIR__ . '/../includes/script.php'; ?>
</body>
</html>
