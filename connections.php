<?php  

$dbhost = "us-cdbr-east-03.cleardb.com";
$dbuser = "bdbcc22fc920ea";
$dbpass = "9cc6d97a";
$dbname = "heroku_9a1153735d811b8";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

die("failed to connect to database!");

}
