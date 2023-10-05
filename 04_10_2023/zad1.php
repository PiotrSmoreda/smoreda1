<!DOCTYPE html>
<html>
<head>
    <title>Sprawdzenie parzystości liczby</title>
</head>
<body>

<form method="post">
    Podaj liczbę: <input type="text" name="liczba">
    <input type="submit" value="Sprawdź">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobierz wartość liczby z formularza
    $liczba = $_POST['liczba'];

    // Sprawdź parzystość liczby
    if ($liczba % 2 == 0) {
        echo "Podana liczba {$liczba} jest liczbą parzystą.";
    } else {
        echo "Podana liczba {$liczba} jest liczbą nieparzystą.";
    }
}
?>

</body>
</html>
