<!DOCTYPE html>
<html>
<head>
    <title>Najmniejsza z trzech liczb</title>
</head>
<body>

<form method="post">
    Podaj pierwszą liczbę: <input type="text" name="liczba1"><br>
    Podaj drugą liczbę: <input type="text" name="liczba2"><br>
    Podaj trzecią liczbę: <input type="text" name="liczba3"><br>
    <input type="submit" value="Sprawdź">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobierz wartości liczb z formularza
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    $liczba3 = $_POST['liczba3'];

    // Znajdź najmniejszą liczbę
    $najmniejsza = $liczba1;

    if ($liczba2 < $najmniejsza) {
        $najmniejsza = $liczba2;
    }

    if ($liczba3 < $najmniejsza) {
        $najmniejsza = $liczba3;
    }

    echo "Najmniejsza z podanych liczb to: {$najmniejsza}.";
}
?>

</body>
</html>