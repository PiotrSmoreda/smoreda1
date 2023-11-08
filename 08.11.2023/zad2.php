<!DOCTYPE html>
<html>
<head>
    <title>Obliczanie pierwiastka kwadratowego</title>
</head>
<body>
    <?php
    $liczba = 16;
    if ($liczba >= 0) {
        $pierwiastek = sqrt($liczba);
        echo "Pierwiastek kwadratowy z liczby {$liczba} wynosi: " . $pierwiastek;
    } else {
        echo "Nie można obliczyć pierwiastka z liczby ujemnej.";
    }
    ?>
</body>
</html>
