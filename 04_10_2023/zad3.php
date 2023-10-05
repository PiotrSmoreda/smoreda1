<!DOCTYPE html>
<html>
<head>
    <title>Sprawdzenie przedziału liczbowego</title>
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

    // Sprawdź, czy liczba mieści się w przedziale
    if ($liczba >= 100 && $liczba < 150) {
        echo "Podana liczba {$liczba} mieści się w przedziale <100, 150).";
    } else {
        echo "Podana liczba {$liczba} nie mieści się w przedziale <100, 150).";
    }
}
?>

</body>
</html>