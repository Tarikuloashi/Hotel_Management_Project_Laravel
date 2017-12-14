<div class="main" id="main">
		<div class="w3layouts_main_grid">
		<div class="booking-form-head-agile">
		<h3>Hotel Booking form</h3>
		<h4>{{Session::get('message')}} </h4>
		</div>
			<form action="{{url('/booking/save')}}" method="POST" class="w3_form_post">
				{{ csrf_field() }}

				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>Name * </h5>
						<div class="nam">
							<input type="text" name="FirstName" placeholder="First Name" required="">
						</div>
						<div class="nam1">
							<input type="text" name="LastName" placeholder="Last Name" required="">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>E-mail </h5>
							<input type="email" name="Email" placeholder="ex : myname@gmail.com" required="">
					</div>
				</div>
				<div class="agileits_main_grid w3_agileits_main_grid">
					<div class="wthree_grid">
						<h5>Room Type</h5>
						<select id="category" name="Category" required="">
							<option value="1">Single Room</option>
							<option value="2">Double Room</option>
							<!-- <option value="3">Suit Room</option> -->
							
						</select>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check In Date *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date"   name="InText" type="date" value="dd/mm/yyyy" onfocus="this.value = ''; }" required="">
							<!-- <input class="date" id="datepicker" name="InText" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required=""> -->
						</div>
						
						<div class="clearfix"> </div>
					</div>

				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check Out Date *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date"  name="OutText" type="date" value="dd/mm/yyyy" onfocus="this.value = '';}" required="">
							
					<!-- 		<input class="date" id="datepicker1" name="OutText" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required=""> -->
						</div>
						
						<div class="clearfix"> </div>
					</div>
				</div>
				
				<div class="w3_main_grid">
					
					<div class="w3_main_grid_right">
						<input type="submit" value="Book Now">
						<!-- <button type="submit">Book NOw</button> -->
					</div>
					<div class="clearfix"> </div>
				</div>
			</form>
			
		</div>

</div>