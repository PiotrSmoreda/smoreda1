<!DOCTYPE html>
<html>
<head>
    <title>Wynik</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tlo = $_POST["tlo"];
    $tekst = $_POST["tekst"];
    
    // Funkcja do sprawdzenia poprawności kolorów
    function is_valid_color($color) {
        return preg_match('/^#[0-9A-Fa-f]{6}$/', $color);
    }

    if (is_valid_color($tlo) && is_valid_color($tekst)) {
        echo "<p style=\"height: 50%; width: 50%; margin: 50px 0; border: 2px dashed red; background-color: $tlo; color: $tekst;\">Twoje imię i nazwisko</p>";
    } else {
        echo "Błąd: Niepoprawny format koloru!";
    }
}
?>
</body>
</html>
