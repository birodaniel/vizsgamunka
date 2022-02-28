<nav class="navbar navbar-expand-lg navbar-light grey-medium d-flex justify-content-between">
    <div class="container-fluid mx-5">
        <h5 class="spartan"><?= $title ?></h5>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav">
                <?php foreach ($navbarItems as $key => $value) { ?>
                    <li class="nav-item">
                        <a class="nav-link spartan" href="<?= $key ?>"><?= $value ?></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
