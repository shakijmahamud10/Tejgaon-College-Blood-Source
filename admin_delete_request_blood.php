<?php
session_start();
include("config.php");
 if(!isset($_SESSION['usertype']))
 {
	 header("location:admin.php");
 }
 if(isset($_GET["id"]))
 {
	 $id=$_GET["id"];
	 echo $sql="DELETE FROM request_blood WHERE ID=$id";
	 $con->query($sql);
	 header("location:admin_delete_request_blood.php?mes= Details Rejcted");
 }
 else
 {
	 header("location:admin_need_blood.php");
 }
 
?>