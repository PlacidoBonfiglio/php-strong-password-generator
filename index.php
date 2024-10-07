<!-- PHP -->
<?php
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
            <form action="index.php" method="get" class="p-3">
                <div>
                    <!-- Password -->
                    <div class="row align-items-center">
                        <div class="col">
                            <span>Lunghezza password:</span>
                        </div>

                        <div class="col-3 me-4">
                            <input type="password" id="inputPassword5" class="form-control"
                                aria-describedby="passwordHelpBlock">
                        </div>
                    </div>


                </div>
            </form>
        </section>

    </main>
</body>

</html>