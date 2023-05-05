
<?php include __DIR__ .'/partials/data/functions.php';

$newPsw = generatePsw($pswChars);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <header>
        <h1 class="text-center text-success my-4">PHP Strong Password Generator</h1>
    </header>
    <main>
        <div class="container">
        <!-- Milestone 1
        Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
        Scriviamo tutto (logica e layout) in un unico file index.php -->
            <form action="<?php echo $_SERVER['PHP_SELF']?>" class="d-flex align-items-center justify-content-center">
                <label class="me-3" for="pswLength">Scegli la lunghezza della password</label>
                <input class="form-control w-25 me-3" type="number" name="pswLength" id="pswLength" min="8" max="32" placeholder="Scegli un numero da 8 a 32">
                <button class="btn btn-success" type="submit">Genera password</button>
            </form>
            <?php if($newPsw) { ?>
            <div>
                <span>
                    La password generata è: <?php echo " $newPsw" ?>
                </span>
            </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>