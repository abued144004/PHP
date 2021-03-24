<?php include("includes/header.php"); 
      include("includes/nav.php");
      
?>

	
<div class="container">

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">

				<?php 
					validate_user_registration();

					


				?>				
		</div>



	</div>
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							
							<div class="col-xs-6">
								<a href="#" class="active" id="">Register</a>
							</div>
							<div class="col-xs-6">
								<a href="view.php" class="active" id="">View</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="register-form" method="post" role="form" >

									<div class="form-group">
										<input type="text" name="fullname" id="fullname" tabindex="1" class="form-control" placeholder="Full Name" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="fathersname" id="fathersname" tabindex="1" class="form-control" placeholder="Father's Name" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="studentid" id="studentid" tabindex="1" class="form-control" placeholder="Student ID" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="university" id="university" tabindex="1" class="form-control" placeholder="University Name" value="" required >
									</div>
									<div class="form-group">
										<input type="text" name="department" id="department" tabindex="1" class="form-control" placeholder="Department Name" value="" required >
									</div>

									<div class="form-group">
										<input type="email" name="email" id="register_email" tabindex="1" class="form-control" placeholder="Email Address" value="" required >
									</div>
									<div class="form-group">
										<textarea id="skil" name="skill" rows="10" cols="70"></textarea>
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php




?>

	
<?php include("includes/footer.php"); ?>