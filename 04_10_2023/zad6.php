<!DOCTYPE html>
<html>
<head>
    <title>Ilość dni w lutym</title>
</head>
<body>

<form method="post">
    Podaj rok: <input type="text" name="rok">
    <input type="submit" value="Sprawdź">
</form>

<?php
function czyRokPrzestepny($rok) {
    return (($rok % 4 == 0 && $rok % 100 != 0) || ($rok % 400 == 0));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rok = $_POST['rok'];
    if (czyRokPrzestepny($rok)) {
        $dniWLutym = 29;
    } else {
        $dniWLutym = 28;
    }

    echo "Ilość dni w lutym roku {$rok}: {$dniWLutym} dni.";
}
?>

</body>
</html>
