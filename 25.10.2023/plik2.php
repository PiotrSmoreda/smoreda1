<?php
if(!isset($COOKIE['visited'])) {
    setcookie("visited", "yes");
    $str = "cookie o nazwie visited nie jes ustawione";
} else {
    $str = "Cookie o nazwie visited jest ustawione. ";
    $str .= "jego wartość to: {$_COOKIE['visited']}.";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UFT-8">
    <meta name="viewport" concent="width=device-width, initial-scale=1.0">
    <title>COOKIE</title>
</head>
<body>
    <div>
        <?php
        echo $str;
        ?>
        </div>
</body>
</html>
