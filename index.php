<?php
$password_generator = 'ABCDEFGHIJklmnopqrstuvwxyz0123456789?!%$';
$password_numero_caratteri = $_GET['password'];
$password_generata = str_shuffle($password_generator);
$nuova_password = substr($password_generata, 3, intval($password_numero_caratteri));

var_dump($password_numero_caratteri);
var_dump($password_generata);
var_dump($nuova_password );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<form action="" method='GET'>
    <div class="container py-5">
        <div class='text-center'>
            <h2>Strong Password Generator</h2>
            <h3>Genera un password sicura</h3>
        </div>
        <div class="d-flex py-5 gap-5">
            <p>Lunghezza password: </p>
            <input type="text" name='password'>
            <input type="submit">
        </div>  
        <p>La tua password è: <strong> <?= $nuova_password ?> </strong></p>
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>