<?php
include "inc/header.php"
?>
<!-- Start your project here-->

<div class="wrapper" style=" background-image: url('https://images.pexels.com/photos/531880/pexels-photo-531880.jpeg?cs=srgb&dl=pexels-pixabay-531880.jpg&fm=jpg'); background-color: #cccccc;">
	<div class="container-fluid d-flex vh-100 w-100 align-items-center">
		<div class="row w-100">
			<div class="col-md-6 offset-md-3 px-3">
				<div class="card">
					<div class="card-body">


						<div class="text-center">
							<h4>Register</h4>
						</div>

						<div class="md-form mb-0">
							<input type="text" id="name" name="name" class="form-control" required>
							<label for="name" class="">Username <span style="color:red">*</span> </label>
						</div>

						<div class="md-form mb-0">
							<input type="password" id="name" name="name" class="form-control" reqyured>
							<label for="name" class="">Password <span style="color:red">*</span> </label>
							<small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
								At least 8 characters and 1 digit
							</small>
						</div>

						<div class="md-form mb-0">
							<input type="text" id="name" name="name" class="form-control">
							<label for="name" class="">Full name <span style="color:red">*</span> </label>

						</div>

						<div class="md-form mb-0">
							<input type="email" id="name" name="name" class="form-control" required>
							<label for="name" class="">Email <span style="color:red">*</span> </label>
							<small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
								Your email will only be used for notification purpose.
							</small>
						</div>


						<div class="md-form mb-0">
							<input type="text" id="name" name="name" class="form-control">
							<label for="name" class="">Phone</label>
						</div>
						<div class="md-form mb-0">
							<textarea type="text" id="name" name="name"  class="md-textarea form-control" rows="3"></textarea>
							<label for="name" class="">Bio</label>
						</div>

						<div class="text-center">
							<a class="btn btn-sm btn-primary ml-1" href="index.php" name="button">Return</a>
							<a class="btn btn-sm btn-info" href="registration-success.php" name="button">Submit</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End your project here-->
<?php
include "inc/header.php"
?>
