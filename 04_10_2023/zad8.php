<!DOCTYPE html>
<html>
<head>
    <title>Sprawdzenie, czy są dwie takie same liczby</title>
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
    $liczba1 = $_POST['liczba1'];
    $liczba2 = $_POST['liczba2'];
    $liczba3 = $_POST['liczba3'];
    if ($liczba1 == $liczba2 || $liczba1 == $liczba3 || $liczba2 == $liczba3) {
        echo "Przynajmniej dwie z podanych liczb są takie same.";
    } else {
        echo "Wszystkie podane liczby są różne.";
    }
}
?>

</body>
</html>
