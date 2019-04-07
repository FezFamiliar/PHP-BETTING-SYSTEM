$(document).ready(function(){

	var count = new Date("Jan 5, 2021 15:37:25").getTime();
	
	setInterval(function(){
		  var d = new Date().getTime();
		  var distance = count - d;
		    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		  $('#time-days').html(days);
		  $('#time-hours').html(hours);
		  $('#time-minutes').html(minutes);
		  $('#time-seconds').html(seconds);
	},1000)

	console.log(6*7);

});