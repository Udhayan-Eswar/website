<?php
$servername = "localhost";
$username = "root";
$pass = "";
$database = "testing";
error_reporting(0);
$con =  new mysqli($servername, $username, $pass,$database);
if($con->connect_errno)
{
 echo $con->connect_error;
 die();
}

    /*
else
{

}
*/
?>