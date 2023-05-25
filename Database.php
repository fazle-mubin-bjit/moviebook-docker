<?php
$servername='192.168.20.158';
$username='root';
$password='';
$dbname = "moviebook";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysqli_error());
}
?>
