<!doctype html>
<html lang="en">
<?php include __DIR__.'../includes/header.php'; ?>
<body>
<section>
    <div class="d-flex justify-content-center">
        <form class="grey-medium p-5" method="post" action="/regsuccess">
            <div class="mx-3 my-3  d-flex justify-content-center">
                <h1 class="spartan">Regisztráció</h1>
            </div>
            <div class="mx-3 my-2">
                <label for="name" class="form-label d-flex justify-content-center grotesk">Név</label>
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
            <div class="mx-3 my-2">
                <label for="password1" class="form-label d-flex justify-content-center grotesk">Jelszó</label>
                <input type="password" class="form-control" id="password1" name="password1" required>
            </div>
            <div class="mx-3 my-2">
                <label for="password2" class="form-label d-flex justify-content-center grotesk">Jelszó újra</label>
                <input type="password" class="form-control" id="password2" name="password2" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="termsAccepted" name="termsAccepted" required>
                <label class="form-check-label grotesk" for="termsAccepted">Általános adatvédelmi nyilatkozat elfogadása</label>
            </div>
            <div class="mx-3 my-2 d-flex justify-content-center">
                <button type="submit" class="btn px-5 lime-button spartan">Regisztrál</button>
            </div>
        </form>
    </div>
</section>
<?php include __DIR__.'../includes/script.php'; ?></script>
</body>
</html>
