<!DOCTYPE html>
<html>
<head>
    <title>Sprawdzenie podzielności liczby pierwszej</title>
</head>
<body>

<form method="post">
    Podaj liczbę pierwszą: <input type="text" name="liczba_pierwsza">
    Podaj drugą liczbę: <input type="text" name="liczba_druga">
    <input type="submit" value="Sprawdź">
</form>

<?php
function czyLiczbaPierwsza($liczba) {
    if ($liczba < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($liczba); $i++) {
        if ($liczba % $i === 0) {
            return false;
        }
    }

    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobierz wartości liczb z formularza
    $liczbaPierwsza = $_POST['liczba_pierwsza'];
    $liczbaDruga = $_POST['liczba_druga'];

    // Sprawdź, czy liczba pierwsza jest podzielna przez drugą liczbę
    if (czyLiczbaPierwsza($liczbaPierwsza) && $liczbaPierwsza % $liczbaDruga === 0) {
        echo "Liczba pierwsza {$liczbaPierwsza} jest podzielna przez {$liczbaDruga} bez reszty.";
    } else {
        echo "Liczba pierwsza {$liczbaPierwsza} nie jest podzielna przez {$liczbaDruga} bez reszty lub nie jest liczbą pierwszą.";
    }
}
?>

</body>
</html>
