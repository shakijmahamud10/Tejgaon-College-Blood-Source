<?php
session_start();
include("config.php");
include("admin_function2.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
			<?php include("admin_head.php");?>
	</head>
	<body>

<?php include("admin_topnav2.php"); ?>
<div class="container"  style='margin-top:70px;'>
	
		<div class="col-sm-10" >
		
			<h3 class="text-primary"><i class="fa fa-bed"></i> Blood Request</h3><hr> 
<div class="col-md-6 col-md-offset-3">
	
			<form role="form">
				<div class="form-group text-primary">
					<label>Search Text</label>
					<input type="text" id="q" class="form-control">
				</div>
			</form>
		</div>
		<div class='col-md-12'>
			<div class='table-responsive' id="feedback">
					
			<?php 
				$sql="Select * from request_blood";
				$sql="SELECT * FROM request_blood ORDER BY ID DESC";
				load_patient($sql,$con);
			?>
			</div>
		</div>
		</div>
	</div>
</div>
	 <?php include("admin_footer.php"); ?>
	  <script>
	$(document).ready(function()
	{
		$("#q").keyup(function(){
				var txt=$("#q").val();
				$.post('admin_rser2.php',{q:txt},function(data){
					$("#feedback").html(data);
				});
			
		});
	
	});
  </script>

	</body>
</html>