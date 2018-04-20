   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
   <style type="text/css">
   i.fa {
  display: inline-block;
  border-radius: 200px;
  
  padding: 0.5em 0.6em;
  font-size: 100px;

}</style>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/profile.png" alt="">
        <hr class="star-light">
      </div>
    </header>


	
	<body>
		<div id="carousel">

			<div class="carousel1">

					<a href="#">
						<div id="carousel-health">

							<i class="fa fa-stethoscope"></i>
							Health 

						</div>
					</a>
						
			</div>

			<div class="carousel1">
						
					<a href="#">
						<div id="carousel-life">

							<i class="fa fa-child"></i><br>
							Life

						</div>
					</a>

			</div>
			
			<div class="carousel1">

					<a href="#">
						<div id="carousel-vehicle">

							<i class="fa fa-car"></i>
							Vehicle
						</div>
					</a>

			</div>

		</div>

		<div style="clear:both;"></div>
		<br />
		<div class="form-group" >

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

