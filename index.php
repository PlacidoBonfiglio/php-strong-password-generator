<!-- PHP -->
<?php
if (isset($_GET['password'])) {
    $password = $_GET["password"];
}
?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>

    <!-- bootstrap cdn 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <h1 class="text-center mt-5 mb-3">Strong Password Generator</h1>

        <h2 class="text-center text-white mb-5">Genera un password sicura</h2>
    </header>

    <main>
        <section class="container">
            <form action="index.php" method="get" class="p-4">
                <div>
                    <!-- Password -->
                    <div class="row align-items-center mb-4">

                        <div class="col mb-4">
                            <span>Lunghezza password:
                                <?php if (isset($_GET['password'])) { ?>
                                    <?php echo strlen($password); ?>
                                <?php } ?>
                            </span>
                        </div>


                        <div class="col-3 me-4">
                            <input type="password" id="inputPassword5" class="form-control"
                                aria-describedby="passwordHelpBlock" name="password">
                        </div>
                    </div>

                    <!-- Ripetizione caratteri -->
                    <div class="row">
                        <div class="col">
                            <span>Consenti ripetizioni di uno o più caratteri:</span>
                        </div>

                        <div class="col-3 me-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Sì
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    No
                                </label>
                            </div>

                        </div>
                    </div>

                    <!-- Buttons -->
                    <div>
                        <button type="submit" class="btn btn-primary">Invia</button>
                        <button type="reset" class="btn btn-secondary">Annulla</button>
                    </div>

                </div>
            </form>
        </section>

    </main>
</body>

</html>