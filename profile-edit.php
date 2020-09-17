<?php
$title = "Update profile";
include "inc/header.php";
include "inc/navbar.php";
?>


<div class="container-fluid">
	<div class="row">
		<?php
		include "inc/sidebar.php";

		?>

		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 mt-2">

			<!-- title -->
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<h1 class="h2"><?php echo $title; ?></h1>
				<div class="btn-toolbar mb-2 mb-md-0">
					<div class="btn-group mr-2">
						<a class="btn btn-sm" href="profile.php">Return</a>
					</div>
				</div>
			</div>

			<!-- end title -->

			<!-- profile -->

			<div class="row">
				<div class="col-md-3">
					<label for="">Username</label>
				</div>
				<div class="col-md-8">
					john.a
				</div>
			</div>

			<div class="row mt-1">
				<div class="col-md-3">
					<label for="">Full name</label>
				</div>
				<div class="col-md-8">
					John Appleased
				</div>
			</div>

			<div class="row mt-1">
				<div class="col-md-3">
					<label for="">Type</label>
				</div>
				<div class="col-md-8">
					Customer
				</div>
			</div>

			<div class="row mt-1">
				<div class="col-md-3">
					<label for="">Bio</label>
				</div>
				<div class="col-md-8">
					Hello, I am John A. I am interested houses between 600 and 800 sqft.
				</div>
			</div>

			<!-- comments -->

			<hr>

			<div>
				<h4><i class="fa fa-comments" aria-hidden="true"></i> Comments</h4>

				<div class="card">
					<div class="card-body">

						<p>
							<strong>Andy Cheung</strong>:
							<i class="fas fa-star" aria-hidden="true"></i>
							<i class="fas fa-star" aria-hidden="true"></i>
							<i class="fas fa-star" aria-hidden="true"></i>
							<i class="fas fa-star" aria-hidden="true"></i>
							<i class="far fa-star" aria-hidden="true"></i>
							<br>
							Nice customer! Polite and attends appointment on time.
						</p>

					</div>
				</div>

				<hr>

				<div class="">
					<label for="name" class="">Rating (5 being the best)</label> <br>
					* * * * * (todo)
				</div>

				<div class="md-form mb-0">
					<textarea type="text" id="name" name="name"  class="md-textarea form-control" rows="3"></textarea>
					<label for="name" class="">Comment</label>
				</div>

				<a href="#" class="btn btn-default">Submit</a>

			</div>

		</main>
	</div>
</div>

<?php
include "inc/footer.php"
?>
