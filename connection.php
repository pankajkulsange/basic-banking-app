<?php 
$con=new mysqli("localhost","root","","sparkbank");
if($con->connect_error)
{
	echo "Database Connection Failed";
}
?>