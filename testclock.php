<?php include 'includes/header.html'; ?>

	<body>
	<div class="row">
	<div class="clock  small-12 medium-12 large-12 your-clock " style="margin-top: 3%;margin-bottom: 3%"></div>
	</div>
		<script type="text/javascript">
			var clock;

			$(document).ready(function() {

				// Grab the current date
				var currentDate = new Date();

				// Set some date in the future. In this case, it's always Jan 1
				var futureDate  = new Date("April  18, 2016 1:15:00");

				// Calculate the difference in seconds between the future and current date
				var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

				// Instantiate a coutdown FlipClock
				clock = $('.clock').FlipClock(diff, {
					clockFace: 'DailyCounter',
					countdown: true
				});
			});
		</script>
		
	</body>
</html>