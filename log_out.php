<?php

session_start();
session_destroy();

header("Location:http://localhost/php7.4.12/login_mypage/login.php");
?>