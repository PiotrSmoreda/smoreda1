<!DOCTYPE html>
<html lang="pl">
<html>
<head>
    <title>Wynik</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kosztBenzyny = $_POST["kosztBenzyny"];
    $iloscKilometrow = $_POST["iloscKilometrow"];
    $srednieSpalanie = $_POST["srednieSpalanie"];

    function is_valid_input($input) {
        return is_numeric($input);
    }

    if (is_valid_input($kosztBenzyny) && is_valid_input($iloscKilometrow) && is_valid_input($srednieSpalanie)) {
        $kosztPrzejazdu = ($iloscKilometrow / 100) * $srednieSpalanie * $kosztBenzyny;
        echo "Koszt benzyny: $kosztBenzyny zl/l<br>";
        echo "Ilość kilometrow: $iloscKilometrow km<br>";
        echo "Średnie spalanie: $srednieSpalanie l/100km<br>";
        echo "Koszt przejazdu wynosi: $kosztPrzejazdu zl";
    } else {
        echo "Blad: Wprowadz poprawne liczby zmiennoprzecinkowe!";
    }
}
?>
</body>
</html>
