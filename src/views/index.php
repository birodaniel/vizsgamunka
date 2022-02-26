<?php include 'header.php'; ?>
<body>
<section>
    <div class="d-flex justify-content-center align-items-center py-5">
        <form class="grey-medium p-5">
            <div class="mx-3 my-3  d-flex justify-content-center">
                <h1 class="spartan"><?= $title ?></h1>
            </div>
            <div class="mx-3 my-2">
                <label for="exampleInputEmail1" class="form-label d-flex justify-content-center grotesk">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mx-3 my-2">
                <label for="exampleInputPassword1"
                       class="form-label d-flex justify-content-center grotesk">Jelszó</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mx-3 my-2 d-flex justify-content-center">
                <button type="submit" class="btn px-5 black-button spartan">Belépés</button>
            </div>
        </form>
    </div>
    <div class="mx-3 my-2 d-flex justify-content-center">
        <a href="/register" class="btn lime-button spartan">Regisztráció</a>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
