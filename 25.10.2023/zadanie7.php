<?php
if (isset($_COOKIE['visit_count'])) {
    $visitCount = intval($_COOKIE['visit_count']);
    
    if (!isset($_COOKIE['visited'])) {
        $visitCount++; 
        setcookie('visited', '1', time() + 3600 * 24); 
        setcookie('visit_count', $visitCount, time() + 3600 * 24); 
    }
} else {
    $visitCount = 1; 
    setcookie('visited', '1', time() + 3600 * 24); 
    setcookie('visit_count', $visitCount, time() + 3600 * 24); 
}


echo "Liczba odwiedzin: " . $visitCount;
?>
