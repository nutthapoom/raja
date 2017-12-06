<?php
  date_default_timezone_set("Asia/Bangkok");
  ini_set("date.timezone","Asia/Bangkok");
  $host="localhost";
  $user="root";
  $pass="";
  $dbname="rajavithi";
  $conn = mysqli_connect($host,$user,$pass,$dbname) or die(mysqli_error($conn));
  mysqli_query($conn,"SET NAMES UTF8");
  mysqli_query($conn,"SET character_set_results=utf8");
  mysqli_query($conn,"SET character_set_client=utf8");
  mysqli_query($conn,"SET character_set_connection=utf8");

  if (mysqli_connect_errno())
{
  echo "Database Connect Failed : " . mysqli_connect_error();
  exit();
}
?>
