<?php 
session_start();

if(!$_SESSION["newPsw"]){
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Password</title>
</head>
<body>
    <h1 class="text-center text-success my-4">PHP Strong Password Generator</h1>
    <h3 class="text-center mb-3">La tua password è: </h3>
        <div class="w-25 border border-2 border-success mx-auto rounded display-6 p-2 text-center"> <?php echo $_SESSION["newPsw"]; ?> </div>
</body>
</html>