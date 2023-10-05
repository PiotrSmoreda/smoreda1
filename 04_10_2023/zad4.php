<!DOCTYPE html>
<html>
<head>
    <title>Sprawdzenie liczby</title>
</head>
<body>

<form method="post">
    Podaj liczbę: <input type="text" name="liczba">
    <input type="submit" value="Sprawdź">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $liczba = $_POST['liczba'];

    if ($liczba < 0) {
        echo "Podana liczba {$liczba} jest mniejsza od zera.";
    } elseif ($liczba === '0' || $liczba === 0) {
        echo "Podana liczba {$liczba} jest równa zero.";
    } else {
        echo "Podana liczba {$liczba} jest większa od zera.";
    }
}
?>

</body>
</html>
