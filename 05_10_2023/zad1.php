<!DOCTYPE html>
<html>
<head>
  <title>Tabela HTML</title>
</head>
<body>

<form method="post" action="">
  <label for="rows">Liczba wierszy:</label>
  <input type="number" name="rows" id="rows">
  
  <label for="columns">Liczba kolumn:</label>
  <input type="number" name="columns" id="columns">
  
  <input type="submit" value="Generuj tabelę">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Pobranie liczby wierszy i kolumn
  $rows = isset($_POST["rows"]) ? (int)$_POST["rows"] : 0;
  $columns = isset($_POST["columns"]) ? (int)$_POST["columns"] : 0;

  // Sprawdzenie czy podano poprawne liczby
  if ($rows <= 0 || $columns <= 0) {
    echo "Podaj poprawną liczbę wierszy i kolumn.";
  } else {
    // Generowanie tabeli HTML
    echo "<table border='1'>";
    for ($i = 1; $i <= $rows; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= $columns; $j++) {
        echo "<td>Wiersz $i, Kolumna $j</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }
}
?>

</body>
</html>
