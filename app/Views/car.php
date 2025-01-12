<?php include "partials/header.php" ?>


<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/front/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
				<h1 class="mb-3 bread">Choose Your Car</h1>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<?php
			// Car sinifini daxil edin
			include_once __DIR__ . '/../Model/Car.php';

			use App\Model\Car;


			// getCarinformation metodunu çağırın
			$cars = Car::getAllCars();

			// Avtomobilləri dövr edirik

			foreach ($cars as $car): ?>
				<div class="col-md-4">
					<div class="car-wrap rounded ftco-animate">
						<div class="img rounded d-flex align-items-end" style="background-image: url(assets/front/images/<?php echo $car['image']; ?>);">
						</div>
						<div class="text">
							<h2 class="mb-0"><a href="car-single.html"><?php echo $car['name']; ?></a></h2>
							<div class="d-flex mb-3">
								<span class="cat"><?php echo $car['model']; ?></span>
								<p class="price ml-auto">$<?php echo $car['price']; ?> <span>/gün</span></p>
							</div>
							<div class="d-flex align-items-center">
								<form action="/reservation" method="POST" class="mr-1">
									<input type="hidden" name="edit_id" value="<?php echo $car['id']; ?>">
									<button type="submit" name="edit_btn" class="btn btn-primary py-2">Rezerv et</button>
								</form>
								<a href="car-single.html" class="btn btn-secondary py-2 ml-1">Ətraflı</a>
							</div>

							<!-- <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Rezerv et</a> <a href="car-single.html" class="btn btn-secondary py-2 ml-1">Ətraflı</a></p> -->
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</div>

</section>






<?php include "partials/footer.php" ?>