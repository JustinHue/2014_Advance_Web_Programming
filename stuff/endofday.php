<html>

	<head>
		<link rel="stylesheet" href="../assets/css/reset.css" type="text/css" media=screen>
		<script type="text/javascript" src="../assets/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript">
	    	var endOfDay;
	    	var startOfDay;
	    	
		    var statusUpdateTimeout = null;
		    $(function(){
		        $(document).ready(function(){
		            $.ajaxSetup({cache: false});
		        });
		
				endOfDay = new Date();
				endOfDay.setHours(17);
				endOfDay.setMinutes(30);
				endOfDay.setSeconds(0);
				startOfDay = new Date();
				startOfDay.setHours(8);
				startOfDay.setMinutes(30);
				startOfDay.setSeconds(0);	
					
		        // Run get status and repeat every 30 seconds
		        getStatus();
		        statusUpdateTimeout = setInterval("getStatus()", 1000);
		        
		    });		
			
		    function getStatus() {
		    	
				today = new Date();
				if ((today < endOfDay && today > startOfDay)) {
					$('#main-title-box').addClass('main-title-box-blue');
					$('#main-title-box').html('<span>Work ends in...</span>');
					td = endOfDay.getTime() - today.getTime();
					msPerHour = 60 * 60 * 1000;
					
					// Calculate hours, minutes and seconds...
					hours = td / msPerHour;
					s_hours = Math.floor(hours);
					minutes = (hours - s_hours) * 60;
					s_minutes = Math.floor(minutes);
					seconds = (minutes - s_minutes) * 60;
					s_seconds = Math.floor(seconds);
				} else {
					$('#main-title-box').addClass('main-title-box-green');
					$('#main-title-box').html('<span>Time to go home!</span>');
					s_hours = 0;
					s_minutes = 0;
					s_seconds = 0;
				}
				
				// Display Counter
				$('#countdown-value-hours').html(s_hours + " : ");
				$('#countdown-word-hours').html('Hours');

				$('#countdown-value-minutes').html(s_minutes + " : ");
				$('#countdown-word-minutes').html('Minutes');

				$('#countdown-value-seconds').html(s_seconds);
				$('#countdown-word-seconds').html('Seconds');

	
		    }
	    
	
		</script>
	
		
		<style type="text/css" media=screen>
			/* 
			 * Gradients from http://www.colorzilla.com/gradient-editor/
			 */
			body {
				text-align:center;
				min-width:1000px;
			}
			
			#main-title-box {
				padding: 15px;
				border-bottom: solid 1px #333333;
			}
			
			.main-title-box-blue {
				background: #2c539e; /* Old browsers */
				/* IE9 SVG, needs conditional override of 'filter' to 'none' */
				background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzJjNTM5ZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMyYzUzOWUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
				background: -moz-linear-gradient(top,  #2c539e 0%, #2c539e 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#2c539e), color-stop(100%,#2c539e)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top,  #2c539e 0%,#2c539e 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top,  #2c539e 0%,#2c539e 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top,  #2c539e 0%,#2c539e 100%); /* IE10+ */
				background: linear-gradient(to bottom,  #2c539e 0%,#2c539e 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2c539e', endColorstr='#2c539e',GradientType=0 ); /* IE6-8 */	
			}
			.main-title-box-green {
				background: #006e2e; /* Old browsers */
				/* IE9 SVG, needs conditional override of 'filter' to 'none' */
				background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzAwNmUyZSIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiMwMDZlMmUiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
				background: -moz-linear-gradient(top,  #006e2e 0%, #006e2e 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#006e2e), color-stop(100%,#006e2e)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top,  #006e2e 0%,#006e2e 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top,  #006e2e 0%,#006e2e 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top,  #006e2e 0%,#006e2e 100%); /* IE10+ */
				background: linear-gradient(to bottom,  #006e2e 0%,#006e2e 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#006e2e', endColorstr='#006e2e',GradientType=0 ); /* IE6-8 */
			}
			
			#main-title-box span {
				font-size: 36px;
				font-weight: normal;
				color: #EFEFEF;
				text-shadow: 0.05em 0.05em #232323;
				font-family: sans-serif;
			}
			
			#countdown-box {
				padding: 25px;
				font-size: 36px;
				background: #ffffff; /* Old browsers */
				/* IE9 SVG, needs conditional override of 'filter' to 'none' */
				background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmZmZmZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjQ3JSIgc3RvcC1jb2xvcj0iI2Y2ZjZmNiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNlZGVkZWQiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
				background: -moz-linear-gradient(top,  #ffffff 0%, #f6f6f6 47%, #ededed 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(47%,#f6f6f6), color-stop(100%,#ededed)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top,  #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* IE10+ */
				background: linear-gradient(to bottom,  #ffffff 0%,#f6f6f6 47%,#ededed 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 ); /* IE6-8 */

				border-bottom: solid 1px #333333;
			}
			
			#countdown-word-box {
				font-size:24px;
			}
			
			#countdown-value-box li {
				color: #CC1111;
				margin-bottom:5px;
			}
			
			
			#countdown-box ul {
				list-style-type: none;
				padding: 0;
			}
			
			#countdown-box ul li {
				display: inline-block;
			}
			
		</style>

	</head>
	<body>
		<div id="main-title-box">
			<span></span>
		</div>
		<div id="countdown-box">
			<ul id="countdown-value-box">
				<li id="countdown-value-hours">
				</li>
				<li id="countdown-value-minutes">
				</li>
				<li id="countdown-value-seconds">
				</li>
			</ul>
			<ul id="countdown-word-box">
				<li id="countdown-word-hours">				
				</li>
				:
				<li id="countdown-word-minutes">
				</li>
				:
				<li id="countdown-word-seconds">
				</li>
			</ul>
		</div>
	</body>
</html>	
