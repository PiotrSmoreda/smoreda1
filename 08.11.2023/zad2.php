<!DOCTYPE html>
<html>
<head>
    <title>Obliczanie pierwiastka kwadratowego</title>
</head>
<body>
    <?php
    $l = 16;
    if ($l >= 0) {
        $pier = sqrt($l);
        echo "Pierwiastek kwadratowy z liczby {$l wynosi: " . $pier;
    } else {
        echo "Nie można obliczyć pierwiastka z liczby ujemnej.";
    }
    ?>
</body>
</html>
