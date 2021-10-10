<!DOCTYPE html>

<html lang="en">
<?php session_start();
include("config.php");
include"head.php";?>
<body>

<?php 
$sql="SELECT * FROM request_blood WHERE STATUS=0";
$result=$con->query($sql);
$n=$result->num_rows;
if($n!=0)
{
	$mes1='<span class="badge pull-right">'.$n.' Request</span>';
}
else
{
	$mes1="";
}
?>


<?php include"top_nav.php";?>
    <!-- Header Carousel -->
    
        <!-- Indicators -->
     
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
               <br><br>
            </div>
            		 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i> Donor Registration</h4>
                    </div>
                    <div class="panel-body">
                        <p> </p>
                        <a href="Donor_reg.php" class="btn btn-primary">Register</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i>Search Blood</h4>
                    </div>
                    <div class="panel-body">
                        <p> </p>
                        <a href="Search_Donor.php" class="btn btn-primary">Search Blood</a>
                    </div>
                </div>
            </div>

			 
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-envelope"></i> Contact Us</h4>
                    </div>
                    <div class="panel-body">
                        <p> </p>
                    <a href="contact.php" class="btn btn-primary">Send us a massage</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-sign-in"></i> Only For Admin</h4>
                    </div>
                    <div class="panel-body">
                        <p> </p>
                   <center>     <a href="admin.php" class="btn btn-primary">LOGIN</a> </center>
                    </div>
                </div>
            </div>

            
			 
        </div>
        
		<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
		<img src='' width="100%" height="100%" id='ModalImg'>
    </div>
  </div>
</div>

        <hr>

        <!-- Changing Copyright is not allowed -->

		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	
	$(".img-portfolio").click(function(){
		var a=$(this).attr("src");
		$("#ModalImg").attr("src",a);
       $('#myModal').modal();
    })
    </script>

</body>

</html>
