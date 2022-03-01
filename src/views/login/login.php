<!doctype html>
<html lang="en">
<?php include __DIR__ . '/../includes/header.php'; ?>
<body>

<?php
$navbarItems = [
    '/' => 'Vissza a nyitólapra'
];
include __DIR__ . '/../includes/navigation.php'; ?>

<section class="d-flex justify-content-center align-items-center h-100">
    <div class="d-flex justify-content-center align-items-around form-height">
        <form class="grey-medium p-5" method="post" action="/profile">
            <div class="mx-4  d-flex justify-content-center">
                <h1 class="spartan"><Bejelentkezés</h1>
            </div>
            <div class="mx-4 my-5">
                <label for="email" class="form-label d-flex justify-content-center grotesk">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mx-4 my-5">
                <label for="password" class="form-label d-flex justify-content-center grotesk">Jelszó</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mx-4 my-5 d-flex justify-content-center">
                <button type="submit" class="btn px-5 black-button spartan">Belépés</button>
            </div>
        </form>
    </div>
</section>
<?php include __DIR__ . '/../includes/script.php'; ?>
</body>
</html>
