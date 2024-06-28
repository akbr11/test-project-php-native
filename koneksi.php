<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "Makra_24";
$database = "test_lyrid";

$con = mysqli_connect($db_host, $db_user, $db_password, $database)
  or die("Koneksi Error ke Database : " . @mysqli_connect_error());
