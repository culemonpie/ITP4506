<?php
$title = "Appointments";
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
						<button class="btn btn-sm btn-primary">
							<i class="fa fa-filter" aria-hidden="true"></i> Filter
						</button>
					</div>
				</div>
			</div>

			<!-- end title -->

			<!-- Appointments -->

			<table class="table table-sm table-hover">
				<tr>
					<th>Reference Number</th>
					<th>Location</th>
					<th>Agent</th>
					<th>Time</th>
					<th>Status</th>
				</tr>

				<tr class="">
					<td>140663</td>
					<td><a href="#">Mong Kok</a></td>
					<td>Jason Li</td>
					<td>2020-12-10</td>
					<td>Pending</td>
				</tr>

				<tr class="table-warning">
					<td>140662</td>
					<td><a href="#">Mong Kok</a></td>
					<td>Jason Li</td>
					<td>2020-12-10</td>
					<td>Awaiting confirmation</td>
				</tr>

				<tr style="background-color: #CCC">
					<td>140661</td>
					<td><a href="#">Mong Kok</a></td>
					<td>Jason Li</td>
					<td>2020-12-10</td>
					<td>Cancelled</td>
				</tr>

				<tr class="table-success">
					<td>140660</td>
					<td><a href="#">Mong Kok</a></td>
					<td>Jason Li</td>
					<td>2020-12-10</td>
					<td>Completed</td>
				</tr>

				<tr class="table-success">
					<td>140659</td>
					<td><a href="#">Mong Kok</a></td>
					<td>Jason Li</td>
					<td>2020-12-10</td>
					<td>Completed</td>
				</tr>

			</table>


		</main>
	</div>
</div>

<?php
include "inc/footer.php"
?>
