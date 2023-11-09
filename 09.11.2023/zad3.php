<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad3</title>
</head>
<body>
<h1>for:</h1>
<?php
for ($liczba = 100; $liczba <= 120; $liczba += 5) {
    echo $liczba . ', ';
}
?>

<h1>do-while:</h1>
<?php
$liczba = 100;
do {
    echo $liczba . ', ';
    $liczba += 5;
} while ($liczba <= 120);
?>


<h1>while:</h1>
<?php
$liczba = 100;
while ($liczba <= 120) {
    echo $liczba . ', ';
    $liczba += 5;
}
?>
</body>
</html>