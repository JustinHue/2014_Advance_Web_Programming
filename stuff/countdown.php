<html>

<head>
	<script type="text/javascript" src="../assets/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">
    
	    var statusUpdateTimeout = null;
	    $(function(){
	        $(document).ready(function(){
	            $.ajaxSetup({cache: false});
	        });
	
	        // Run get status and repeat every 30 seconds
	        getStatus();
	        statusUpdateTimeout = setInterval("getStatus()", 1000);
	
	        // Stop updating after 15 minutes
	        setTimeout(function() {
	            if(statusUpdateTimeout) clearInterval(statusUpdateTimeout);
	        }, 900000);
	    });
	
	    function getStatus() {
			today = new Date();	
			bigDay = new Date("December 25, 2020");			
			
			td = bigDay.getTime() - today.getTime();
			msPerYear = 24 * 60 * 60 * 1000 * 365.25;
			
			// Calculate years, days, hours, minutes and seconds...
			years = td / msPerYear;
			s_years = Math.floor(years); 
			days = (years - s_years) * 365.25;
			s_days = Math.floor(days);
			hours = (days - s_days) * 24;
			s_hours = Math.floor(hours);
			minutes = (hours - s_hours) * 60;
			s_minutes = Math.floor(minutes);
			seconds = (minutes - s_minutes) * 60;
			s_seconds = Math.floor(seconds);
			
			// Display Time Difference
			$('#countdown').html("Years: " + s_years + 
								 " Days: " + s_days + 
								 " Hours: " + s_hours +
								 " Minutes: " + s_minutes +
								 " Seconds: " + s_seconds);

	    }
    

	</script>
</head>
<body>
	<h2>Big Day!</h2>
	<h3>December 25, 2020</h3>
	<div id="countdown">
	</div>
</body>
</html>	
