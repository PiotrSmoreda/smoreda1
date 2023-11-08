<!DOCTYPE html>
<html>
<head>
    <title>Porównywanie zmiennych</title>
</head>
<body>
    <?php
    $a = 8;
    $b = 4;
    if ($a < $b) {
        echo "$a jest mniejsze od $b";
    } elseif ($a == $b) {
        echo "$a jest równe $b";
    } else {
        echo "$a jest większe od $b";
    }
    ?>
</body>
</html>
