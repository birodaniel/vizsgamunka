<!doctype html>
<html lang="en">
<?php include __DIR__.'../includes/header.php'; ?>
<body>
<section class="d-flex justify-content-center align-items-center h-100">
    <div class="d-flex justify-content-center align-items-around form-height">
        <form class="grey-medium p-5">
            <div class="mx-4  d-flex justify-content-center">
                <h1 class="spartan"><?= $title ?></h1>
            </div>
            <div class="mx-4 my-5">
                <label for="exampleInputEmail1" class="form-label d-flex justify-content-center grotesk">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mx-4 my-5">
                <label for="exampleInputPassword1" class="form-label d-flex justify-content-center grotesk">Jelszó</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mx-4 my-5 d-flex justify-content-center">
                <button type="submit" class="btn px-5 black-button spartan">Belépés</button>
            </div>
            <div class="mx-4 my-5 d-flex justify-content-center">
                <a href="./register/register.php" class="btn lime-button spartan">Regisztráció</a>
            </div>
        </form>
    </div>
</section>
<?php include __DIR__.'../includes/script.php'; ?></script>
</body>
</html>
