<?php
$servername='fazle-db.c5tsce7xtv8b.eu-west-3.rds.amazonaws.com';
$username='root';
$password='bjit1234';
$dbname = "moviebook";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysqli_error());
}
?>
