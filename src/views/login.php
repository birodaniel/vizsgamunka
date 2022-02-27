<?php include 'header.php'; ?>
<body>
<section class="d-flex justify-content-center align-items-center h-100">
    <div class="d-flex justify-content-center align-items-around form-height">
        <form class="grey-medium p-5" method="post" action="/profile">
            <div class="mx-4  d-flex justify-content-center">
                <h1 class="spartan"><?= $title ?></h1>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
