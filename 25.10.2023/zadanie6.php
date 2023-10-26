<?php
function isBirthday($birthdate) {
    $today = date('Y-m-d');
    return $today == $birthdate;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $birthdate = $_POST['birthdate'];

    setcookie('birthdate', $birthdate, time() + (3600 * 30), '/'); 

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}

if (isset($_COOKIE['birthdate'])) {
    $birthdate = $_COOKIE['birthdate'];

    if (isBirthday($birthdate)) {
        echo "Sto lat! ";
    }
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Urodzinki</title>
</head>
<body>
    <?php if (!isset($birthdate) || !isBirthday($birthdate)): ?>
    <form method="POST">
        <label>Wprowadź swoją datę urodzin: </label>
        <input type="date" name="birthdate" required>
        <button type="submit">Zapisz datę</button>
    </form>
    <?php endif; ?>
</body>
</html>