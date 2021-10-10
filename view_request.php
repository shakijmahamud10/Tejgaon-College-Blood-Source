<?php
session_start();
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("admin_head.php");?>
	</head>
	<body>

<?php include("admin_topnav2.php"); ?>
<div class="container"  style='margin-top:70px'>
	<div class="row">
		
		<div class="col-sm-9" >
			<h3 class='text-primary'><i class="fa fa-bed"></i> Patient Details </h3><hr>    
		<div class="row">
		<?php 
		
			if(isset($_POST["submit"]))
			{
				$id=$_GET['id'];
				$cdate=$_POST["CDATE"];
				$status=$_POST["STATUS"];
				if($cdate=="")
				{
					$cdate="0000-00-00";
					$status=1;
				}
			$sql="UPDATE request_blood SET CDATE='{$cdate}',STATUS='{$status}' WHERE ID='{$id}'";
				if($con->query($sql))
				{
					
					$s= "<div class='alert alert-success fade in' ><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success : </strong> Status Updated Success.</div>";
				}
			
			}
			
		
		if(isset($_GET["id"]))
		{
			$sql="SELECT * FROM request_blood WHERE ID=".$_GET["id"];
			$result=$con->query($sql);
			if($result->num_rows>0)
			{
				$row=$result->fetch_assoc();
				
		?>

       
		<div class="col-md-4">
					<div class="panel">
					<div class="panel-body">
					<img src="donor_image/main.png" class="image-rounded" height="300px" width="100%">
			</div>
            
            
			</div>
			
		</div>
		<div class="col-md-8">
		<table class="table table-striped">
			<tr>
				<th>Patient Name</th>
				<td><?php echo $row["NAME"];?></td>
			</tr>
			<tr>
				<th>Blood</th>
				<td><?php echo $row["BLOOD"];?></td>
			</tr>
			<tr>
				<th>BAG</th>
				<td><?php echo $row["BUNIT"];?></td>
			</tr>
			<tr>
				<th>Hospital</th>
				<td><?php echo $row["HOSP"];?></td>
			</tr>
			<tr>
				<th>City</th>
				<td><?php echo $row["CITY"];?></td>
			</tr>
			
            <!-- <tr>
				<th>Pincode</th>
				<td><?php echo $row["PIN"];?></td>
			</tr> -->

		<!--	<tr>
				<th>Doctor Name</th>
				<td><?php echo $row["DOC"];?></td>
			</tr> -->

			<tr>
				<th>Required Date (YY-MM-DD)</th>
				<td><?php echo  $row["RDATE"];?></td>
			</tr>
			<tr>
				<th>Contact Person</th>
				<td><?php echo $row["CNAME"];?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?php echo $row["CADDRESS"];?></td>
			</tr>
		<!--	<tr>
				<th>Email</th>
				<td><?php echo $row["EMAIL"];?></td>
			</tr> -->
			<tr>
				<th>Contact No</th>
				<td><?php echo $row["CON1"];?></td>
			</tr>
			<tr>
				<th>University/College Name</th>
				<td><?php echo $row["CON2"];?></td>
			</tr>
			<tr>
				<th>Status</th>
				<td><?php 
				if($row["STATUS"]==0)
				{
					echo "<b>Pending</b>";
				}
				else if($row["STATUS"]==1)
				{
					echo "<b>Not Completed</b>";
				}	
				else if($row["STATUS"]==2)
				{
					echo "<b>Completed</b>";
				}
					
					
					?></td>
			</tr>
			<tr>
				<th>Completed Date</th>
				<td><?php echo $row["CDATE"];?></td>
			</tr>
		</table>
		</div>
		<br>
		<a href='req_blood.php' class='btn btn-primary '>Back Page</a>
		</form>
		</div>
		<?php
			}
		}	
		else
		{
		
		}

		?>	
					
		</div>
		</div>
	</div>
</div>
  
  
	 <?php include("admin_footer.php"); ?>
  

	</body>
</html>