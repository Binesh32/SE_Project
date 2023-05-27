@extends('sign')

@section('content')

<h2 class="text-center">
									User Sign Up New Account
								</h2>

<section class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">

					<div class="row">

						<form class="shop-register" role="form">

							<div class="col-sm-6">
								<div class="form-group validate-required" id="billing_first_name_field">
									<label for="billing_first_name" class="control-label">
										<span class="grey">First Name:</span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control "style="background-color: lightgrey;" name="billing_first_name" id="billing_first_name" placeholder="" value="">
								</div>

								<div class="form-group">
									<label for="billing_state" class="control-label">
										<span class="grey">Gender</span>
										<span class="required">*</span>
									</label>

									<select class="form-control"style="background-color: lightgrey;" name="billing_state" id="billing_state">
										<option value="">Select …</option>
										<option value="KT">Male</option>
										<option value="LA">Female</option>
										<option value="BH">Others</option>
										
										
									</select>
								</div>


							</div>

							<div class="col-sm-6">
								<div class="form-group validate-required" id="billing_last_name_field">
									<label for="billing_last_name" class="control-label">
										<span class="grey">Last Name:</span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control "style="background-color: lightgrey;" name="billing_last_name" id="billing_last_name" placeholder="" value="">

								</div>

								<div class="form-group validate-required validate-email" id="billing_email_field">
									<label for="billing_email" class="control-label">
										<span class="grey">Email Address:</span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control "style="background-color: lightgrey;" name="billing_email" id="billing_email" placeholder="" value="">

								</div>

							</div>

							

							<div class="col-sm-6">

							
								<div class="form-group address-field validate-required" id="billing_address_fields">
									<label for="billing_address_1" class="control-label">
										<span class="grey">Address:</span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control "style="background-color: lightgrey;" name="billing_address_1" id="billing_address_1" placeholder="" value="">

								</div>

							

								

								<div class="form-group validate-required validate-phone" id="billing_phone_field">
									<label for="billing_phone" class="control-label">
										<span class="grey">Phone:</span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control "style="background-color: lightgrey;" name="billing_phone" id="billing_phone" placeholder="" value="">

								</div>


								


								

							</div>

							<div class="col-sm-6">

								<div class="form-group">
									<label for="billing_state" class="control-label">
										<span class="grey">State/Province:</span>
										<span class="required">*</span>
									</label>

									<select class="form-control"style="background-color: lightgrey;" name="billing_state" id="billing_state">
										<option value="">Select …</option>
										<option value="KT">KTM</option>
										<option value="LA">Lalitpur</option>
										<option value="BH">Bhaktapur</option>
										
										
									</select>
								</div>

								<div class="form-group" id="billing_password_field">
									<label for="billing_password" class="control-label">
										<span class="grey">Password:</span>
										<span class="required">*</span>
									</label>

									<input type="text" class="form-control " style="background-color: lightgrey;"style="background-color: lightgrey;" name="billing_password" id="billing_password" placeholder="" value="">

								</div>

								

							


							


							</div>

							<div class="col-sm-12">

								<button type="submit" class="theme_button wide_button color1 topmargin_40">Sign Up</button>
								<button type="reset" class="theme_button wide_button">Clear Form</button>

								<a class="theme_button color1 wide_button"  style="margin-left: 61rem;"href="{{ route('home') }}">Home</a>

								<p class="divider_20 text-center">
					Create an account  <a href="{{ route('usersignup') }}">User</a>, <a href="{{ route('organizationsignup') }}">Organization</a>or  <a href="{{ route('adminsignup') }}">Admin</a> 
					</a>
				</p>

							</div>

						</form>


					</div>
				</div>
			</section>

@endsection