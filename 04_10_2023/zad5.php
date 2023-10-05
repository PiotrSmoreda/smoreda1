!DOCTYPE html>
<html>
<head>
    <title>Sprawdzenie wieku</title>
</head>
<body>

<form method="post">
    Podaj swój wiek: <input type="text" name="wiek">
    <input type="submit" value="Sprawdź">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobierz wartość wieku z formularza
    $wiek = $_POST['wiek'];

    // Sprawdź, do której kategorii wiekowej należy podany wiek
    if ($wiek < 11) {
        echo "Podany wiek {$wiek} lat oznacza, że jesteś dzieckiem.";
    } elseif ($wiek >= 11 && $wiek <= 17) {
        echo "Podany wiek {$wiek} lat oznacza, że jesteś nastolatkiem.";
    } else {
        echo "Podany wiek {$wiek} lat oznacza, że jesteś dorosły.";
    }
}
?>

</body>
</html>