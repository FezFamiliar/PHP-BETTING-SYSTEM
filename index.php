<!DOCTYPE html>
<html>
<head>
	<title>Betting System</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<script type="text/javascript" src="js/time.js"></script>
</head>
<body>
	<?php include 'nav.php'; ?>
<div id="carousel" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  	<?php 
  		for ($i=0; $i < 3; $i++):
  		
  	?>
  	    <div class="carousel-item  <?php if($i == 0) echo 'active'; ?>">
     		 <div class="d-block w-100">
  		     <div class="carousel-caption d-none d-md-block">
		      <h5>Slide Number <?php echo $i; ?></h5>
		      <p>Text for Slide Number <?php echo $i; ?></p>
     		 </div>
		  </div>
        </div>
  	 <?php endfor; ?>
  </div>
  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section class="countdown py-5">
			<div class="d-flex flex-column align-items-center justify-content-center aw-vertical-align">
			<p>Super offers ending in:</p>
			<div id="countdown" class="row my-3">
				<div class="col-3 d-flex flex-column align-items-center">
					<h3 id="time-days">00</h3>
					<p>Days</p>
				</div>
				<div class="col-3 d-flex flex-column align-items-center">
					<h3 id="time-hours">00</h3>
					<p>Hours</p>
				</div>
				<div class="col-3 d-flex flex-column align-items-center">
					<h3 id="time-minutes">00</h3>
					<p>Minutes</p>
				</div>
				<div class="col-3 d-flex flex-column align-items-center">
					<h3 id="time-seconds">00</h3>
					<p>Seconds</p>
				</div>
			</div>
			<div class="row"> 
				<div class="col">
					<button type="button" class="btn btn-light rounded-0" data-toggle="modal" data-target="#remindme">
					Remind&nbsp;Me!</button>
				</div>
				<div class="col">
					<button type="button" class="btn btn-primary rounded-0" data-toggle="modal" data-target="#about">
					About Us!</button>
				</div>
			</div>
			<div class="collapse border border-light mt-2 mt-sm-5" id="showabout">
				<section class="text-center p-3">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis auctor nulla, eu tempor orci.
				</section>
			</div>
		</div>

</section>
	<?php include 'footer.php'; ?>
</body>
</html>