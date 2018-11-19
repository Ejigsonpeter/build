<!DOCTYPE html>
<html lang="en">
<?php
 include "connect.php";
if (isset($_POST['submit'])){
	 $firstname  =  mysqli_escape_string($conn,$_POST['firstname']);
	 $lastname = mysqli_escape_string($conn,$_POST['lastname']);
	 $email = mysqli_escape_string($conn,$_POST['email']);
	 $phoneno = mysqli_escape_string($conn,$_POST['phoneno']);
	 $gender = mysqli_escape_string($conn,$_POST['gender']);
	 $status = "paid";
	 $r = rand(000000000000,9999999999999999);
	 $rr = rand(000000000000,9999999999999999);
	 $rrr = $r.$rr;

 //check if email already exists.

$echeck = "SELECT * FROM members WHERE email = '$email' ";
$q1 = mysqli_query($conn,$echeck);
$count = mysqli_num_rows($q1);
if ($count > 0){

	echo "email already exist";
}	
else{
	$pcheck = "SELECT * FROM members WHERE phoneno = '$phoneno' ";
	$q = mysqli_query($conn,$pcheck);
	$c = mysqli_num_rows($q);

	if ($c > 0){
		echo "phoneno already exist";
	}
	else{
		//query to insert into records
	$sql = "INSERT INTO members (lastname,firstname,email,phoneno,gender,rrr,status)
								VALUES(
								'$lastname',
								'$firstname',
								'$email',
								'$phoneno',
								'$gender',
								'$rrr',
								'$status')";
	$query = mysqli_query($conn,$sql);
	if ($query){

		echo $rrr;
		header("location:r.php?id=$rrr ");

	}
	else{
		echo mysql_error();
	}

	//end insert query

	}

}




}

 ?>


<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Town Planners">
	<meta name="author" content="Ansonika">
	<title>Register</title>


	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
	<link href="css/skins/square/grey.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/date_time_picker.css" rel="stylesheet">
	
	<!-- COLOR CSS -->
	<link href="css/color_2.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

	<script src="js/modernizr.js"></script>
	<!-- Modernizr -->

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->

	
	<!-- End Header -->

	<main>
		<div id="form_container">
			<div class="row">
				<div class="col-lg-5">
					<div id="left_form">
						<figure><img src="img/registration_bg.svg" alt=""></figure>
						<h2>Registration</h2>
						<p>Please Fill The Form and Proceed to Payment</p>
						<a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
					</div>
				</div>
				<div class="col-lg-7">

					<div id="wizard_container">
						<div id="top-wizard">
							<div id="progressbar"></div>
						</div>
						<!-- /top-wizard -->
						<form   method="POST" action="register.php" enctype="multipart/form-data" >
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">

								<div class="step">
									<h3 class="main_question"><strong>1/3</strong>Please fill with your details</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="firstname" class="form-control required" placeholder="First name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="lastname" class="form-control required" placeholder="Last name">
											</div>
										</div>
									</div>
									<!-- /row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="email" name="email" class="form-control required" placeholder="Your Email">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="phoneno" class="form-control" placeholder="Your Telephone">
											</div>
										</div>
									</div>
									<!-- /row -->

									<div class="row">
										
										<div class="col-md-6">
											<div class="form-group radio_input">
												<label><input type="radio" value="Male" checked name="gender" class="icheck">Male</label>
												<label><input type="radio" value="Female" name="gender" class="icheck">Female</label>
											</div>
										</div>
									</div>
									<!-- /row -->
								</div>
								<!-- /step-->

								<div class="step">
									<h3 class="main_question"><strong>2/3</strong>Enter Card Details</h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<div class="styled-select">
													<select class="required" name="country">
														<option value="" selected>Select your Card Type</option>
														<option value="master card">Master Card</option>
														<option value="Visa Card">Visa Card</option>
														<option value="Verve Card">Verve Card</option>
														
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="number" name="card ni" class="form-control required" placeholder="Card number">
											</div>
										</div>
										<!-- /col-sm-12 -->
									</div>
									<!-- /row -->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="number" name="cvv" class="form-control required" placeholder="CVV">
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<input type="password" name="pin" class="form-control required" placeholder="PIN">
											</div>
										</div>
									</div>
									<!-- /row -->
									
									<!-- /row -->
								</div>
								<!-- /step-->

								<div class="submit step">
									<h3 class="main_question"><strong>3/3</strong>Terms and Agreement</h3>
									
									<div class="form-group terms">
										<input name="terms" type="checkbox" class="icheck required" value="yes">
										<label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</label>
									</div>
								</div>
								<!-- /step-->
							</div>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Backward </button>
								<button type="button" name="forward" class="forward">Forward</button>
								<button type="submit" name="submit" class="submit">Submit</button>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
				</div>
			</div><!-- /Row -->
		</div><!-- /Form_container -->
	</main>
	
	<footer id="home" class="clearfix">
		<p>© 2018 Ejigson Web Technolgies</p>
		<ul>
			<li><a href="https://themeforest.net/item/mavia-register-reservation-questionare-reviews-form-wizard/20027349?ref=ansonika" class="animated_link">All Rights Reserved</a></li>
			<li><a href="#0" class="animated_link">Terms and conditions</a></li>
			<li><a href="#0" class="animated_link">Contacts</a></li>
		</ul>
	</footer>
	<!-- end footer-->
	
	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- cd-overlay-content -->



	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>we are not responsible for misuse of your cerification....</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- Modal info -->
	<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="more-infoLabel">Frequently asked questions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>no questions </p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- SCRIPTS -->
	<!-- Jquery-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Common script -->
	<script src="js/common_scripts_min.js"></script>
	<!-- Wizard script -->
	<script src="js/registration_wizard_func.js"></script>
	<!-- Menu script -->
	<script src="js/velocity.min.html"></script>
	<script src="js/main.js"></script>
	<!-- Theme script -->
	<script src="js/functions.js"></script>

</body>

</html>