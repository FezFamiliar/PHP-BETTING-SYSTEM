<?php 
	include 'config.php';
 ?>
<body>
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
     		 <div class="d-block w-100" style="background-image:url('img/rsz_pic<?php echo $i+1 . '.jpg'?>');background-repeat:no-repeat;background-position:center;background-size:cover;height:100%;">
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
<section class="countdown">
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
</body>