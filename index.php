<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Limerick Challenge 2014 - Wayne State University Library</title>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

		<!-- Bootstrap -->
		<link href="inc/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Local CSS -->
		<link href="css/stylesheet.css" rel="stylesheet">

		<!-- Local JS -->
		<script src="js/main.js" type="text/javascript"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<div class="container">

			<!-- title -->
			<div class="row">
				<div id="heading_div" class="col-md-8 col-md-offset-2 center-text">      
					<h1>Limerick Challenge 2014</h1>
					<h3>Wayne State University Libraries</h3>					
				</div>
			</div>

			<!-- image -->
			<div class="row">
				<div id="image_div" class="col-md-8 col-md-offset-2 center-text">                  
					<a href="http://digital.library.wayne.edu/digitalcollections/imageviewer_osd.php?PID=wayne:CFAIEB01e710&DS=JP2" target="_blank">
						<img style="max-width:100%; max-height:100%;" src="http://digital.library.wayne.edu/fedora/objects/wayne:CFAIEB01e710/datastreams/PREVIEW/content" alt="Fire Chief - Limerick Image" class="img-rounded">        
					</a>
					<br>
					<span style="font-size:12px; color:gray;"><em>"Ed Wynn in the rumble seat of his 1932 Packard coupe roadster", 1934, Changing Face of the Auto Industry Collection</em></span>
				</div>
			</div>

			<div id="input_section">
				<!-- instruction -->
				<div class="row">
					<div class="col-md-8 col-md-offset-2 center-text">                  
						<p>Here is a whole bunch of text about a) why we're doing this, b) how to enter, and c) how to view others.</p>
					</div>
				</div>

				<!-- limerick input -->				
				<div class="row">
					<div class="col-md-4 col-md-offset-3" style="padding-right:25px; border-right: 1px solid #ccc;">
						<div id="form_container">						                  
							<form id="limerick_form" role="form" onsubmit="sendLimerick(); return false;">
							  <div class="form-group">					    
							    <textarea class="form-control" id="limerick_input" name="limerick_input" rows="5" placeholder="Enter limerick"></textarea>
							  </div>					  
							  <div class="form-group">
							    <label for="exampleInputEmail1">Name</label>
							    <input type="name" class="form-control" id="name_input" placeholder="Enter name" value="graham hukill">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Email</label>
							    <input type="email" class="form-control" id="email_input" placeholder="Enter email" value="graham@hukill.com">
							  </div>						  
							  <button type="submit" class="btn btn-default">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-md-2 center-text">                  
						<button type="button" class="btn btn-default btn-lg">View All Submissions!</button>
					</div>
				</div>


			</div> <!--close input-->

			<div id="display_section">
				<div class="row">
					<div class="col-md-4 col-md-offset-4">                  
						<h3 id="limerick_text_display"><pre></pre></h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-md-offset-5 center-text">                  
						<button type="button" class="btn btn-default btn-lg">View All Submissions!</button>
					</div>
				</div>
			</div>

		</div>






		
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="inc/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>