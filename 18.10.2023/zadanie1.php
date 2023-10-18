<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
    <h1>Dodaj nowy wiersz</h1>
    <form action="baza.php" method="post">
        Kolumna 1: <input type="text" name="kolumna1"><br>
    
        <?php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "zadanie1";
        $polaczenie=mysqli_connect($host, $user, $pass, $db);
        if ($_SERVER["REQUEST_METHOD"] == "POST")   {
            $wiersz = $_POST['wiersz'];
            $zapytania = "INSERT INTO zadanie1 VALUES ('$wiersz')";

            $wynik = mysqli_query($polaczenie, $zapytania); 
        }
        ?>
</form>
    
</body>
</html>