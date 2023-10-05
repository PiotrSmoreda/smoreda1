<!DOCTYPE html>
<html>
<head>
  <title>Liczby podzielne przez 3 i 7</title>
</head>
<body>

<form method="post" action="">
  <label for="x">Podaj x:</label>
  <input type="number" name="x" id="x">
  
  <label for="y">Podaj y:</label>
  <input type="number" name="y" id="y">
  
  <input type="submit" value="Wyświetl liczby">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $x = isset($_POST["x"]) ? (int)$_POST["x"] : 0;
  $y = isset($_POST["y"]) ? (int)$_POST["y"] : 0;

  echo "Liczby podzielne przez 3 i 7 z przedziału <$x, $y>:<br>";

  for ($i = $x; $i <= $y; $i++) {
    if ($i % 3 === 0 && $i % 7 === 0) {
      echo "$i, ";
    }
  }
}
?>

</body>
</html>
