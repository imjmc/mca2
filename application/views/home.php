<!DOCTYPE html>
<html>
	
	
	<body>
		<div id="cont">
			<div id="cont-health"><a href="<?php echo base_url();?>health/healthins"">Health </a></div>
			<div id="cont-life">Life</div>
			<div id="cont-vehicle">Vehicle</div>
		</div>
		
		<div class="form-group">

			<form id="form" method="post" action="<?php echo base_url();?>form/search">

				<label for="age">Age in year</label>
                 	<input type="text" class="form-control" name="age">
				
				<label for="term">Term in year</label>
					<input type="text" class="form-control" name="term">
				
				<label for="investment">Investment per year</label>
					<input type="text" class="form-control" name="investment">

				<button class="btn btn-primary btn-lg btn-block" type="submit">Compare</button>

			
			</form>
		</div>

		

	</body>

</html>

