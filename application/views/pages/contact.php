<div id="page-content">
	<h2 class="text-danger">Contact Us</h2>
	<hr>
	<div class="row">
		<div class="col-md-8">
			<form>
		  		<div class="form-group row">
		    		<label for="first_name" class="col-sm-4 col-form-label text-right">First Name:</label>
		    		<div class="col-sm-8">
		      			<input type="text" class="form-control" name="first_name" id="first_name" placeholder="">
		    		</div>
		  		</div>

		  		<div class="form-group row">
		    		<label for="last_name" class="col-sm-4 col-form-label text-right">Last Name:</label>
		    		<div class="col-sm-8">
		      			<input type="text" class="form-control" name="last_name" id="last_name" placeholder="">
		    		</div>
		  		</div>

		  		<div class="form-group row">
		    		<label for="email" class="col-sm-4 col-form-label text-right">Email:</label>
		    		<div class="col-sm-8">
		      			<input type="text" class="form-control" name="email" id="email" placeholder="">
		    		</div>
		  		</div>

		  		<div class="form-group row">
		    		<label for="phone" class="col-sm-4 col-form-label text-right">Phone:</label>
		    		<div class="col-sm-8">
		      			<input type="text" class="form-control" name="phone" id="phone" placeholder="">
		    		</div>
		  		</div>

		  		<div class="form-group row">
		    		<label for="budget" class="col-sm-4 col-form-label text-right">Budget:</label>
		    		<div class="col-sm-8">
		      			<select class="custom-select mr-sm-2" id="budget" name="budget">
					        <option value="">Select One</option>
					        <option value="Just Looking">Just Looking</option>
					        <option value="$0 to $1000">$0 to $1,000</option>
					        <option value="$1,000 to $2,000">$1,000 to $2,000</option>
					        <option value="$2,000 to $4,000">$2,000 to $4,000</option>
					        <option value="$4,000 and Up">$4,000 and Up</option>
		      			</select>
		    		</div>
		  		</div>
		  		
		  		<div class="form-group row">
		    		<label for="project_date" class="col-sm-4 col-form-label text-right">Project Date:</label>
		    		<div class="col-sm-8">
		      			<input type="date" class="form-control" name="project_date" id="project_date" placeholder="">
		    		</div>
		  		</div>

				<div class="form-group row">
		    		<label for="project_date" class="col-sm-4 col-form-label text-right">Project:</label>
		    		<div class="col-sm-8">
		      			<textarea class="form-control" name="project" id="project"></textarea>
		    		</div>
		  		</div>

				<div class="form-group row">
					<div class="col-sm-12 text-right">
						<button type="submit" class="btn btn-danger btn-lg">Submit</button>
					</div>
				</div>
			</form>
		</div>

		<div class="col-md-4">
			<img src="<?php echo base_url('assets/images/samson-concrete-what-we-do-central-ohio.jpg'); ?>" alt="Samson Concrete Serving Central Ohio" class="img-fluid">
			<p>At Samson Concrete we put our customers first so if you have any questions or comments feel to fill out to form or call us at <a href="tel:17403347036">(740) 334-7036</a>.</p>
		</div>
	</div>
</div>
<script src="https://www.google.com/recaptcha/api.js?render=<?php echo RECAPTCHA_SITE_KEY; ?>"></script>
	<script>
		grecaptcha.ready(function() {
	  		grecaptcha.execute('<?php echo RECAPTCHA_SITE_KEY; ?>', {action: 'contactus'}).then(function(token) {

	  		}
	  	);
	});
	</script>