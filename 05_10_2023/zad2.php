<!DOCTYPE html>
<html>
<head>
  <title>Zwiększanie i zmniejszanie zmiennej</title>
</head>
<body>

<form method="post" action="">
  <label for="x">Podaj x:</label>
  <input type="number" name="x" id="x">
  
  <label for="y">Podaj y:</label>
  <input type="number" name="y" id="y">
  
  <input type="submit" value="Wykonaj">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $x = isset($_POST["x"]) ? (int)$_POST["x"] : 0;
  $y = isset($_POST["y"]) ? (int)$_POST["y"] : 0;

  $i = $x;
  echo "Zwiększanie i zmniejszanie zmiennej \$i od $x do $y o 2, a następnie zmniejszanie do 1 o 4:<br>";

  echo "Pętla for: ";
  for (; $i <= $y; $i += 2) {
    echo "$i, ";
  }
  for (; $i >= 1; $i -= 4) {
    echo "$i, ";
  }
  echo "<br>";

  $i = $x;
  
  echo "Pętla while: ";
  while ($i <= $y) {
    echo "$i, ";
    $i += 2;
  }
  while ($i >= 1) {
    echo "$i, ";
    $i -= 4;
  }
  echo "<br>";

  $i = $x;


  echo "Pętla do...while: ";
  do {
    echo "$i, ";
    $i += 2;
  } while ($i <= $y);
  do {
    echo "$i, ";
    $i -= 4;
  } while ($i >= 1);
}
?>

</body>
</html>
