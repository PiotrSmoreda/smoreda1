<?php

function isBirthday($birthday) {
    $today = date("d-m-y");
    return $today == $birthday;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $birthday = $_POST["birthday"];  
    if (strtotime($birthday) === false) {
        echo "Podaj poprawną datę urodzin w formacie RRRR-MM-DD.";
    } else {
       
        setcookie("birthday", $birthday, strtotime($birthday), "/");
        echo "Data urodzin została zapisana w pliku cookie.";
    }
}
if (isset($_COOKIE["birthday"])) {
    $birthday = $_COOKIE["birthday"];
    
    if (isBirthday($birthday)) {
        echo "Wszystkiego najlepszego z okazji urodzin!";
    } else {
        echo "Twoje urodziny są w dniu: " . $birthday;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Urodziniki</title>
</head>
<body>
    <form method="POST">
        <label>Podaj datę urodzin (DD-MM-RRRR):</label>
        <input type="text" name="birthday">
        <input type="submit" value="Zapisz datę urodzin">
    </form>
</body>
</html>
