<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad 4</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "baza_danych";


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM uczniowie";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["Imie"] . "  " . $row["Nazwisko"] . "  " . $row["Data_urodzenia"] . "  </li>";
    }
    echo "</ul>";
} else {
    echo "Brak danych.";
}


$conn->close();
?>
</body>
</html>


