<!DOCTYPE html>
<html>
<head>
  <title>Sprawdź czy liczba jest liczbą pierwszą</title>
</head>
<body>

<form method="post" action="">
  <label for="number">Podaj liczbę:</label>
  <input type="number" name="number" id="number">
  <input type="submit" value="Sprawdź">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $number = isset($_POST["number"]) ? (int)$_POST["number"] : 0;

  $is_prime = true;

  if ($number < 2) {
    $is_prime = false;
  } else {
    for ($i = 2; $i <= sqrt($number); $i++) {
      if ($number % $i === 0) {
        $is_prime = false;
        break;
      }
    }
  }

  if ($is_prime) {
    echo "$number jest liczbą pierwszą.";
  } else {
    echo "$number nie jest liczbą pierwszą.";
  }
}
?>

</body>
</html>
