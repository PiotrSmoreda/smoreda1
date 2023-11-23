<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST["login"];
    $haslo = $_POST["haslo"];
    $connect = mysqli_connect('localhost', 'root', '', 'baza_danych');

}

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Logowanie</title>
</head>
<body>
<form action="" method="post">
    <label for="login">Login:</label>
    <input type="text" id="login" name="login" required>
    
    <label for="haslo">Hasło:</label>
    <input type="password" id="haslo" name="haslo" required>
    <input type="submit" value="Zaloguj">
</form>



</body>
</html>