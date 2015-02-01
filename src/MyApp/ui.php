<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<link rel="stylesheet" type="text/css" href="ui_style.css">
			<script>
					var ans;
					var ml=50;
					var mr=50;
					
					
					function canvaso()
					{
						 ans=prompt("what on your mind?");
						 printe();
					}

					function printe()
					{
					var c = document.getElementById("myCanvas");
					var ctx = c.getContext("2d");
					ctx.font = "30px Arial";
					if(ans != null)
					{
					ctx.fillText(ans,mr,ml);
					ml=ml+50;
					}
					// mr=mr+50;
				
					}

					function form_show()
					{
						var fr= document.getElementById('form_box');
						alert(fr.style.display);
						if(fr.style.display== 'block')
							fr.style.display='none';
						if(fr.style.display== 'none')
							fr.style.display='block';
					}

			</script>
	</head>
	<body>
		<div id="header">REAL TIME WHITEBOARD </div>



		<div id="navagation">
				<ui>
					<p><button onclick="canvaso()" id="share_text">Share text</button></p>
					<p><button onclick="form_show()" id="share_text">Share Image</button></p>
					

				</ui>

		</div>
		<div id="form_box">
		
		</div>


		<div id="canvas_area">
		

		<CANVAS width="800px" height="400px" style="border: 5px solid grey; margin-left:300px;" id="myCanvas">         </CANVAS>
		
		</div>
		<div id="notification">

		</div>


	</body>