<?php
$title = "Catalogue";
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

						<?php

						if ($role > 1){
							echo
							'
							<button class="btn btn-sm" type="button" name="button">
							<i class="fa fa-plus" aria-hidden="true"></i> Create
							</button>
							';
						}

						?>
						<button class="btn btn-sm btn-primary ml-1" id="filter_button">
							<i class="fa fa-filter" aria-hidden="true"></i> Filter
						</button>
					</div>
				</div>
			</div>

			<!-- end title -->

			<!-- Filter -->
			<div class="card" id="filter_panel">
				<div class="card-body">

					<div class="row">
						<div class="col-12">
							<h5>Filter</h5>
						</div>
					</div>

					<div class="row mt-2">
						<div class="col-md-3">
							Type
						</div>
						<div class="col-md-9">
							<input type="checkbox" name="" value=""> Rent
							<input type="checkbox" name="" value=""> Sale
						</div>
					</div>

					<div class="row mt-2">
						<div class="col-md-3">
							District
						</div>
						<div class="col-md-9">
							<select>
								<option value="">All</option>
								<option value="">Hong Kong Island</option>
								<option value="">Kowloon</option>
								<option value="">New Territories</option>
							</select>
						</div>
					</div>



					<div class="row mt-2">
						<div class="col-md-3">
							Price
						</div>
						<div class="col-md-9">
							<input type="range" min="0" max="100" />
						</div>
					</div>


					<div class="row mt-2">
						<div class="col-12">
							<button type="button" class="btn btn-sm btn-primary" name="button" id="search_button">
								<i class="fa fa-search" aria-hidden="true"></i> Search
							</button>

							<span id="loading_text">
								<i class="fa fa-spinner fa-spin" aria-hidden="true"></i> Loading...
							</span>
						</div>
					</div>

				</div>
			</div>

			<!-- Catalogue -->
			<div class="row mt-2">

				<div class="card col-md-5 m-1 property">
					<div class="card-body">
						<a href="#">
							<h5 class="card-title">
								旺角高層海景樓
							</h5>
						</a>
						<hr>
						Rent: Negotiable <br>
						Sale: $ 8,250,000
					</div>
				</div>

				<div class="card col-md-5 m-1 property">
					<div class="card-body">
						<h5 class="card-title">
							油麻地高層海景樓
						</h5>
					</div>
				</div>
			</div>

		</main>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	// $("#filter_panel").hide();
	$("#loading_text").hide();
	$("#filter_button").click(function(){
		$("#filter_panel").fadeToggle();
	});

	$("#search_button").click(function(){
		//Show "loading" text. After 2 seconds, hide it.
		$("#loading_text").show();
		setTimeout(function(){
			$("#loading_text").hide();
			$(".property:even").fadeOut();
		}, 1000);
	});

});

</script>

<?php
include "inc/footer.php"
?>
