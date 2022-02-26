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
<section class="m-5">
    <div class="d-flex justify-content-center  h-100">
        <form class="bg-info p-5">
            <div class="mx-3 my-5  d-flex justify-content-center">
                <h1><?= $title ?></h1>
            </div>
            <div class="mx-3 my-5">
                <label for="exampleInputEmail1" class="form-label d-flex justify-content-center">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mx-3 my-5">
                <label for="exampleInputPassword1" class="form-label d-flex justify-content-center">Jelszó</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mx-3 my-5 d-flex justify-content-center">
                <button type="submit" class="btn btn-success px-5">Belépés</button>
            </div>
            <div class="mx-3 my-5">
                <a href="./register/register.php" class="btn btn-primary px-5  d-flex justify-content-center">Regisztráció</a>
            </div>
        </form>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
