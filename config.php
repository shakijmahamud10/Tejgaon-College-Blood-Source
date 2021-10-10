<?php 

$con=new mysqli("localhost","root","","needblood-shakij");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>