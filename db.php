<?php
//Database connection.
$con = MySQLi_connect(
   "localhost", //Server host name.
   "siteskin_pal", //Database username.
   "Sanjeet@12345", //Database password.
   "test" //Database name or anything you would like to call it.
);
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>