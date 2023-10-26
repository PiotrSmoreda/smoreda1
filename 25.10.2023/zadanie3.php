<?php
$newusername = "NowaNazwaUzytkownika";
setcookie("username", $newusername, time() + 3600, "/"); 
echo "Plik cookie 'username' został zaktualizowany. Nowa wartość: " . $_COOKIE['username'];
?>
