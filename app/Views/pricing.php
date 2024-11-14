<?php include "partials/header.php" ?>


<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/front/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pricing <i class="ion-ios-arrow-forward"></i></span></p>
				<h1 class="mb-3 bread">Pricing</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<div class="car-list">
					<table class="table">
						<thead class="thead-primary">
							<tr class="text-center">
								<th>&nbsp;</th>
								<th>&nbsp;</th>
								<th class="bg-primary heading">Per Hour Rate</th>
								<th class="bg-dark heading">Per Day Rate</th>
								<th class="bg-black heading">Leasing</th>
							</tr>
						</thead>
						<tbody>
							<?php
							// Car sinifini daxil edin
							include_once __DIR__ . '/../Model/Pricing.php';

							use App\Model\Pricing;

							$pricings = Pricing::getAllPricing();



							foreach ($pricings as $pricing): ?>
							<tr class="">
								<td class="car-image">
									<div class="img" style="background-image:url(assets/front/images/<?php echo $pricing['image']; ?>);"></div>
								</td>
								<td class="product-name">
									<h3><?php echo $pricing['name']; ?></h3>
									<p class="mb-0 rated">
										<span>rated:</span>
										<span class="ion-ios-star"></span>
										<span class="ion-ios-star"></span>
										<span class="ion-ios-star"></span>
										<span class="ion-ios-star"></span>
										<span class="ion-ios-star"></span>
									</p>
								</td>

								<td class="price">
									<p class="btn-custom"><a href="#">Rent a car</a></p>
									<div class="price-rate">
										<h3>
											<span class="num"><small class="currency">$</small><?php echo $pricing['perhour_price']; ?></span>
											<span class="per">/per hour</span>
										</h3>
										<span class="subheading">$3/hour fuel surcharges</span>
									</div>
								</td>

								<td class="price">
									<p class="btn-custom"><a href="#">Rent a car</a></p>
									<div class="price-rate">
										<h3>
											<span class="num"><small class="currency">$</small><?php echo $pricing['perday_price']; ?></span>
											<span class="per">/per day</span>
										</h3>
										<span class="subheading">$3/hour fuel surcharges</span>
									</div>
								</td>

								<td class="price">
									<p class="btn-custom"><a href="#">Rent a car</a></p>
									<div class="price-rate">
										<h3>
											<span class="num"><small class="currency">$</small><?php echo $pricing['permonth_price']; ?></span>
											<span class="per">/per month</span>
										</h3>
										<span class="subheading">$3/hour fuel surcharges</span>
									</div>
								</td>
							</tr><!-- END TR-->
							<?php endforeach; ?>


						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include "partials/footer.php" ?>