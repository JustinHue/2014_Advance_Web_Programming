<html>

<head>
	<style media="screen" type="text/css">
		body {
			width: 100%;
			background: #DDDDDD;
			height: 100%;
		}
	</style>
	<script src="js/jquery-1.9.1.min.js"></script>

	<script>
		function doClick() {
						
			var winRef = window.open(''+self.location,'Responsive Design','width=350,height=300,toolbar=1,status=1,resizable=1,scrollbars=1');
			winRef.resizeTo(screen.width, screen.height);
			winRef.moveTo(0, 0);

			var winwidth = screen.width;
			var winheight = screen.height;
			var speed = 0;
			var acceleration = 0.095;
			var delay_counter = 0;
			var milliseconds = 30;
			var DELAY = 5000;
			
			var id;

			function intervalTrigger() {
				return setInterval(function() {
					if (delay_counter <= 3500) {
						speed -= acceleration;
					} else if (delay_counter <= 7000) {
						speed += acceleration;
					} else if (delay_counter <= 12000) {
						speed = 0;
					} else if (delay_counter <= 15500) {
						speed += acceleration;
					} else if (delay_counter <= 19000) {
						speed -= acceleration;
					} else {
						speed = 0;
						winwidth = screen.width;
						window.clearInterval(id);
						winRef.close();
					}
				
					winwidth += speed;

                	                winRef.resizeTo(winwidth, winheight);
					delay_counter += milliseconds; 
				}, milliseconds);
			};
			id = intervalTrigger();
		
		
		}
	</script>
</head>

<body>
	<input id='demo-now-button' type='button' value='See a Demo Now!' onclick='doClick();'/>
</body>

</html>
