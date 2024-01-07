<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="index.php">Sörök listája</a>
        <a href="uj_sor.php">Új sör felvitele</a>
    </nav>

  
    <?php 
           if (isset($_SESSION['state'])) {
            echo "<p>".$_SESSION['message']."</p>";
            switch ($_SESSION['state']) {
                case 'success':
                    break;
                case 'error':
                    foreach ($_SESSION['errors'] as $error) {
                        echo "<p>$error</p>";
                    }
                    break;
            }
            unset($_SESSION['state']);
            unset($_SESSION['message']);
            unset($_SESSION['errors']);
        }
    ?>

    <form action="uj_sor_feldolgozasa.php" method="post">
        <div class="container">
            <div class="form-group">
                <label for="sor_nev">Sör neve</label>
                <input type="text" id="sor_nev" name="sor_nev" required  class="form-control">
            </div>
            <div>
                <label for="tipus">Típus</label>
                <input type="text" name="tipus" id="tipus" required  class="form-control">
            </div>
            <div>
                <label for="kiszerelese">Kiszerelés</label>
                <input type="double" name="kiszerelese" id="kiszerelese" required  class="form-control">
            </div>
            <div>
                <label for="alkoholfok">Alkoholfok</label>
                <input type="double" name="alkoholfok" id="alkoholfok" required  class="form-control">
            </div>
            <div>
                <label for="lejarati_ido">Lejárati idő</label>
                <input type="date" name="lejarati_ido" id="lejarati_ido" required  class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Elküld</button>
        </div>
    </form>
</body>
</html>