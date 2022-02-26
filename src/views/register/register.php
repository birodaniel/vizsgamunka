<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title><?= $title ?></title>
</head>
<body>
<section class="d-flex justify-content-center align-items-center h-100">
    <div class="d-flex justify-content-center form-height">
        <form class="grey-medium p-5">
            <div class="mx-3 d-flex justify-content-center">
                <h1 class="spartan"><?= $title ?></h1>
            </div>
            <div class="mx-3 my-2">
                <label for="exampleInputPassword1" class="form-label d-flex justify-content-center grotesk">Név</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mx-3 my-2">
                <label for="exampleInputPassword1" class="form-label d-flex justify-content-center grotesk">Felhasználónév</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mx-3 my-2">
                <label for="exampleInputEmail1" class="form-label d-flex justify-content-center grotesk">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mx-3 my-2">
                <label for="exampleInputPassword1" class="form-label d-flex justify-content-center grotesk">Jelszó</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mx-3 my-2">
                <label for="exampleInputPassword1" class="form-label d-flex justify-content-center grotesk">Jelszó újra</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mx-3 my-2 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label grotesk" for="exampleCheck1">Általános adatvédelmi nyilatkozat elfogadása</label>
            </div>
            <div class="mx-2 my-2   d-flex justify-content-center">
                <button type="submit" class="btn px-5 lime-button spartan">Regisztrál</button>
            </div>
        </form>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>