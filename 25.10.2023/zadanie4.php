<?php
if (isset($_COOKIE['username'])) {
    setcookie("username", "", time() - 3600, "/");
    echo "Plik cookie 'username' został usunięty.";
} else {
    echo "Plik cookie 'username' nie istnieje.";
}
?>
