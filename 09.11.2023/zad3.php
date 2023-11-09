<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad3</title>
</head>
<body>
<h2>for:</h2>
<?php
for ($liczba = 100; $liczba <= 120; $liczba += 5) {
    echo $liczba . ', ';
}
?>

<h2>do-while:</h2>
<?php
$liczba = 100;
do {
    echo $liczba . ', ';
    $liczba += 5;
} while ($liczba <= 120);
?>


<h2>while:</h2>
<?php
$liczba = 100;
while ($liczba <= 120) {
    echo $liczba . ', ';
    $liczba += 5;
}
?>
</body>
</html>