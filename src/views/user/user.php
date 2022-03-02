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
    <h3 class="spartan">Versenyek</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Név</th>
            <th scope="col">Időpont</th>
            <th scope="col">Műveletek</th>
        </tr>
    </table>
    <h3 class="spartan">Eredmények</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Név</th>
            <th scope="col">Versenyek</th>
            <th scope="col">Eredménydsfsdfds</th>
        </tr>
    </table>
</section>
<?php include __DIR__ . '/../includes/script.php'; ?>
</body>
</html>
