<div id="gallery" class="gallery">
	<div class="container">
		<div class="agileits-gal-title">
			<h3>Our gallery</h3>
		</div> 
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Rooms</span></li>
					<li class="resp-tab-item"><span>Mains</span></li>
					<li class="resp-tab-item"><span>Dessert</span></li>
					<li class="resp-tab-item"><span>Drinks & Ice creams</span></li>				
				</ul>	
				<div class="clearfix"> </div>	
				
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						@foreach($viewRoomDetails as $showRoom)
						<div class="col-md-6 portfolio-grids">
							<div class="gallery-text-agile agile-offer1">
								<h3>{{$showRoom->roomName}}<span>${{$showRoom->roomRent}}/per night</span></h3>
								<p>{{$showRoom->roomDescription}}...</p>
								<ul>
									<li>Adults: 3</li>
									<li>Facilites: Closet with hangers, Digital Personal Safe, HD flat-screen TV (including Satellite TV), Telephone</li>
									<li>Size: 30m²</li>
									<li>Bed Type: two bed</li>
									<li>Categories: Double, Single</li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img1">
							<div class=""><img src="{{asset($showRoom->roomImage)}}" alt="{{$showRoom->roomName}}" width="350px" height="500px"> </div>	
						</div>
						@endforeach
						<div class="col-md-6 portfolio-grids">
							<div class="gallery-text-agile agile-offer1">
								<h3>Double Room<span>$114/per night</span></h3>
								<p>Fresh local baby whiting fillets in a sesame and parsley crumb s/w chips salad lemon and tartare... This is a lunch that will leave you asking for mor...</p>
								<ul>
									<li>Adults: 3</li>
									<li>Facilites: Closet with hangers, Digital Personal Safe, HD flat-screen TV (including Satellite TV), Telephone</li>
									<li>Size: 30m²</li>
									<li>Bed Type: two bed</li>
									<li>Categories: Double, Single</li>
								</ul>
							</div>
						</div>
						
						<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img1">
							<div class="offer-gallery-img1"></div>	
						</div>
						
						<div class="clearfix"></div>


						
						<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img2">
							<div class="offer-gallery-img2"></div>
						</div>
						
						<div class="col-md-6 portfolio-grids">
							<div class="gallery-text-agile agile-offer1">
								<h3>single Room<span>$90/per night</span></h3>
								<p>Fresh local baby whiting fillets in a sesame and parsley crumb s/w chips salad lemon and tartare... This is a lunch that will leave you asking for mor...</p>
								<ul>
									<li>Adults: 2</li>
									<li>Facilites: Closet with hangers, Digital Personal Safe, HD flat-screen TV (including Satellite TV), Telephone</li>
									<li>Size: 30m²</li>
									<li>Bed Type: One bed</li>
									<li>Categories: Double, Single</li>
								</ul>
							</div>
						</div>

						<div class="clearfix"></div>

						<div class="col-md-6 portfolio-grids">
							<div class="gallery-text-agile agile-offer1">
								<h3>Double Room<span>$114/per night</span></h3>
								<p>Fresh local baby whiting fillets in a sesame and parsley crumb s/w chips salad lemon and tartare... This is a lunch that will leave you asking for mor...</p>
								<ul>
									<li>Adults: 3</li>
									<li>Facilites: Closet with hangers, Digital Personal Safe, HD flat-screen TV (including Satellite TV), Telephone</li>
									<li>Size: 30m²</li>
									<li>Bed Type: two bed</li>
									<li>Categories: Double, Single</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img1">
							<div class="offer-gallery-img1"></div>									
						</div>
					</div>
					<div class="tab-2 resp-tab-content">
						<div class="col-md-6 portfolio-grids">
								<div class="gallery-text-agile agile-offer1">
								<h3>Crumbed Whiting<span>$250</span></h3>
								<p>Fresh local baby whiting fillets in a sesame and parsley crumb s/w chips salad lemon and tartare... This is a lunch that will leave you asking for mor...</p>
								</div>
								<div class="gallery-text-agile agile-offer2">
								<h3>Chicken Parmagiana<span>$320</span></h3>
								<p>Chicken Surf & Turf $31 Char grilled garlic chicken breast fillet topped with a garlic seafood sauce & served with garden salad & steak fries or with ...</p>
								
								</div>
								<div class="gallery-text-agile agile-offer3">
								<h3>Gluten Free Surf & Turf<span>$450</span></h3>
								<p>Julliene veggies & rice noodles with mint coriander & cashew nuts nestled in mixed leaves and finished with sesame oil and a lime dressing.</p>

								</div>
								</div>
								<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img3">
									<div class="offer-gallery-img3">
									</div>
								</div>
							<div class="clearfix"></div>
						</div>
						<div class="tab-3 resp-tab-content">
						<div class="col-md-6 portfolio-grids">
								<div class="gallery-text-agile agile-offer1">
								<h3>Organic Yoghurt Panna Cotta<span>$50</span></h3>
								<p>Blackcurrant & limoncello compote, crunchy spiced crumble & lemon zest</p>
								</div>
								<div class="gallery-text-agile agile-offer2">
								<h3>Jamies Favorite Orange Cake<span>$480</span></h3>
								<p>Served with whipped crème fraîche, fresh orange & pomegranate</p>
								
								</div>
								<div class="gallery-text-agile agile-offer3">
								<h3>Vin Sano Tiramisu<span>$39</span></h3>
								<p>The classic Italian dessert with vin santo, chocolate shavings & orange zest</p>

								</div>
								</div>
								<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img4">
									<div class="offer-gallery-img4">
									</div>
								</div>
							<div class="clearfix"></div>
					</div>
					<div class="tab-4 resp-tab-content">
						<div class="col-md-6 portfolio-grids offer-gal-images offer-gal-img5">
									<div class="offer-gallery-img5">
									</div>
								</div>
								<div class="col-md-6 portfolio-grids">
									<div class="gallery-text-agile agile-offer1">
									<h3>Organic Yoghurt Cotta<span>$50</span></h3>
									<p>Blackcurrant & limoncello compote, crunchy spiced crumble & lemon zest</p>
									</div>
									<div class="gallery-text-agile agile-offer2">
										<h3>Jamie Blossom Poleta Cake<span>$480</span></h3>
										<p>Served with whipped crème fraîche, fresh orange & pomegranate</p>
								
									</div>
									<div class="gallery-text-agile agile-offer3">
										<h3>Vin Sano Tiramisu<span>$39</span></h3>
										<p>The classic Italian dessert with vin santo, chocolate shavings & orange zest</p>

									</div>
								</div>
						<div class="clearfix"> </div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img1 ">
						
						</div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img2">
						
						</div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img3">
						
						</div>
						<div class="col-md-3 ice-cream-agile ice-cream-agile-img4">
						
						</div>
						<div class="clearfix"> </div>
			     	</div>
				</div>
			</div>		
		</div>
	</div>
</div>