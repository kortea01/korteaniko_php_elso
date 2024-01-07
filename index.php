<!DOCTYPE html>
<html lang="hu">
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sörök</title>

</head>
<body>
<?php 
require "BeersTableMethods.php";
$database = new BeersTableMethods();
$beers = $database->getAll();

?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="index.php">Sörök listája</a>
        <a href="uj_sor.php">Új sör felvitele</a>
    </nav>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Sör neve</th>
                <th>Típus</th>
                <th>Kiszerelés</th>
                <th>Alkoholfok</th>
                <th>Lejárati idő</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($beers as $beer): ?>
                <tr>
                    <td><?php echo $beer['id'] ?></td>
                    <td><?php echo $beer['sor_nev'] ?></td>
                    <td><?php echo $beer['tipus'] ?></td>
                    <td><?php echo $beer['kiszerelese'] ?></td>
                    <td><?php echo $beer['alkoholfok'] ?></td>
                    <td><?php echo $beer['lejarati_ido'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>