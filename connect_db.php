<?php
$host = "localhost";
$user = "u221932278_blast";
$pass = "123456";
$database = "u221932278_blast";
$connect_db = mysqli_connect($host, $user, $pass, $database) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
mysqli_set_charset($connect_db, 'utf8');
?>