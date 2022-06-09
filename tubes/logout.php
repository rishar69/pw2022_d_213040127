<?php

session_start();
session_destroy();


setcookie('login','',time()-50000);



header("location : login.php");
exit;
?>