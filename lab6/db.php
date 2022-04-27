<?php
    require_once 'vendor/autoload.php';
    $servername='localhost';
    $username='root';
    $password='15312';
    $dbname = "my_db";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
?>