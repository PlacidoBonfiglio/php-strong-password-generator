<!-- PHP -->
<?php
require_once __DIR__ . "/functions/functions.php";

if (isset($_GET["password"])) {
    $password = $_GET["password"];
}

// Creo un array di lettere minuscole 
$letters = ["a", "b", "c", "d", "e", "f", "g", "h", "i"];

// Creo un array di lettere Maiuscole 
$capLetters = ["A", "B", "C", "D", "E", "F", "G", "H", "I"];

// Cre array di numeri 
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// Creo array di simboli
$symbols = ["!", "?", "&", "$", "@", "#"];

// Prendo un elemento a caso dagli array
$randomLetter = $letters[array_rand($letters)];

$randomCapLetter = $capLetters[array_rand($capLetters)];

$randomSymbol = $symbols[array_rand($symbols)];
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

        <h2 class="text-center text-white mb-5">Genera una password sicura</h2>
    </header>

    <main>
        <section class="container">
            <?php if(!isset($_GET["password"])) { ?>
                <div id="notification" class="mb-3">
                    <div class="row">
                        <div class="col-12 p-4 ms-3">
                            Nessun parametro valido inserito
                        </div>
                    </div>
                </div>
            <?php } ?>

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
                            <!-- Radio buttons -->
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="character-repetition"
                                    id="character-repetition" checked>
                                <label class="form-check-label" for="character-repetition">
                                    Sì
                                </label>
                            </div>
                            <div class="form-check mb-4">
                                <input class="form-check-input" type="radio" name="no-character-repetition"
                                    id="no-character-repetition">
                                <label class="form-check-label" for="no-character-repetition">
                                    No
                                </label>
                            </div>

                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="check-letters" name="checkboxLetters">
                                <label class="form-check-label" for="check-letters">
                                    Lettere
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="checknumbers" name="checkboxNumbers">
                                <label class="form-check-label" for="checknumbers">
                                    Numeri
                                </label>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="check-symbols" name="checkboxSymbols">
                                <label class="form-check-label" for="check-symbols">
                                    Simboli
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <?php if (isset($_GET["password"])) { ?>
                        <div class="text-center mt-4 mb-5">
                            La tua nuova password è: <b>
                                <?php echo $password; 
                                if (isset($_GET["checkboxLetters"])) {echo $randomLetter . $randomCapLetter;};
                                if (isset($_GET["checkboxSymbols"])) {echo $randomSymbol;}; 
                                if (isset($_GET["checkboxNumbers"])) {echo getRandomInt(1, 20);}; ?>
                            </b>
                        </div>
                    <?php } ?>

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