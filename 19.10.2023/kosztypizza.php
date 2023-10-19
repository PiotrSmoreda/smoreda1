<!DOCTYPE html>
<html>
<head>
    <title>Wynik</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $odleglosc = $_POST["odleglosc"];
    $ciepla = isset($_POST["ciepla"]) ? true : false;
    
    $kosztNaKm = 0.5;
    $kosztDowozu = $odleglosc * $kosztNaKm;

    if ($ciepla) {
        $kosztDowozu += ($kosztDowozu * 0.15);
    }

    echo "Odległość: $odleglosc km<br>";
    echo "Pizza ciepła: " . ($ciepla ? "Tak" : "Nie") . "<br>";
    echo "Koszt dowozu wynosi: $kosztDowozu zł";
}
?>
</body>
</html>
