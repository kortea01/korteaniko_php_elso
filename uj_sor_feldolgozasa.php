<?php 
session_start();
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    http_response_code(405);
    die();
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új sör felvitele</title>
</head>
<body>
    <?php 
    $errors = [];
    if (!isset($_POST["sor_nev"]) || empty($_POST["sor_nev"])) {
        $errors[] = "Sör nevének megadása kötelező";
    }
    if (!isset($_POST["tipus"]) || empty($_POST["tipus"])) {
        $errors[] = "Típus megadása kötelező";
    }
    if (!isset($_POST["kiszerelese"]) || empty($_POST["kiszerelese"])) {
        $errors[] = "Kiszerelés megadása kötelező";
    }
    if (!isset($_POST["alkoholfok"]) || empty($_POST["alkoholfok"])) {
        $errors[] = "Alkoholfok megadása kötelező";
    }
    if (!isset($_POST["lejarati_ido"]) || empty($_POST["lejarati_ido"])) {
        $errors[] = "Lejárati idő megadása kötelező";
    }
  
    if (empty($errors)) {
        require_once "BeersTableMethods.php";
        $database = new BeersTableMethods();
      
        if (empty($errors)) {
            $database->create($_POST);
        }
    }

    if (empty($errors)) {
        $_SESSION['state'] = "success";
        $_SESSION['message'] = "Sikeres adatrögzítés";
    } else {
        $_SESSION['state'] = "error";
        $_SESSION['message'] = "Hiba történt az adatrögzítés során";
        $_SESSION['errors'] = $errors;
    }
    header("Location: uj_sor.php");
    ?>
</body>
</html>