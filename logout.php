<?php 
session_start();

session_destroy();

echo '<script type="text/javascript">window.location.replace("http://localhost/BasitKayit/Not_Site/login.html");</script>';
//header("Location: http://localhost/Basit%20Kay%C4%B1t/Not_Site/first_open.php");
?>