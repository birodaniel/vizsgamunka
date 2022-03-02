<!doctype html>
<html lang="en">
<?php include __DIR__ . '/../includes/header.php'; ?>
<body>

<?php
$navbarItems = [
    '/logout' => 'Kijelentkezés'
];
include __DIR__ . '/../includes/navigation.php'; ?>

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
<?php include __DIR__ . '/../includes/script.php'; ?>
</body>
</html>
