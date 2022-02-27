<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title><?= $title ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light grey-medium d-flex justify-content-between">
    <div class="container-fluid mx-5">
        <h5 class="spartan"><?= $title ?></h5>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link spartan" href="#">Kilépés</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section class="mx-5 mt-2 p-5 bg-light grey-white">
    <h3 class="spartan">Meccs kódok</h3>
    <table class="table grotesk">
        <tr>
            <th scope="col">Versenyek</th>
            <th scope="col">Fordulók</th>
            <th scope="col">Meccs kódok</th>
        </tr>
    </table>

    <h3 class="spartan">Csatlakozás</h3>
    <ul class="list-group list-group-horizontal d-flex justify-content-between">
        <li><h6  class="grotesk">Meccs kód</h6></li>
        <li><div>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div></li>
        <li><button type="submit" class="btn black-button mt-0 spartan">Csatlakozás</button></li>
    </ul>
    <h3 class="spartan">Meccs eredmény</h3>
    <ul class="list-group list-group-horizontal d-flex justify-content-between">
        <li><h6 class="grotesk">Meccs kód</h6></li>
        <li><div>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div></li>
        <li><h6 class="grotesk">Meccs eredmény</h6></li>
        <li><div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Válassz egy eredményt</option>
                    <option value="1">Nyertem</option>
                    <option value="2">Vesztettem</option>
                    <option value="3">Döntetlen lett</option>
                </select>
            </div></li>
        <li><button type="submit" class="btn black-button mt-0 spartan">Rögzítés</button></li>
    </ul>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
