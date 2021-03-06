<?php header('P3P: CP="CAO PSA OUR"'); ?>
<!doctype html>
<!--[if IE 7]>    <html lang="en" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html lang="en" class="no-js ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en" class="no-js"><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<title>Friends Compatibility App!</title>
		
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<style type="text/css">
			.centered-content {
				text-align: center !important;
				vertical-align: middle !important;
			}
			.hidden-overflow {
				white-space: nowrap;
				overflow: hidden;
				text-overflow: ellipsis;
			}
		</style>
	</head>

	<body class="hidden-overflow">
		<div id="fb-root"></div>
		<script type="application/javascript">
		// Load the SDK's source Asynchronously
		( function(d, debug) {
			var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
			if (d.getElementById(id)) {
				return;
			}
			js = d.createElement('script');
			js.id = id;
			js.async = true;
			js.src = "//connect.facebook.net/en_US/all" + ( debug ? "/debug" : "") + ".js";
			ref.parentNode.insertBefore(js, ref);
		}(document, /*debug*/false));
		</script>
		<br/>
		<div class="container-fluid">
			<div class="row-fluid">
				
				<!-- startof left column -->
				<div id="left-div" class="span2 text-center"></div>
				<!-- endof left column -->
				
				<!-- startof right column -->
				<div class="span10">
					<!-- startof unauth-div -->
					<div id="unauth-div">
						<div class="page-header">
							<h1 id="unauth-greetings">Loading</h1>
							<img id="loading-img" src="images/ajax-loader.gif" style="padding-left: 10px;" />
						</div>
						<div id="unauth-error-msgs"></div>
					</div>
					<!-- endof uauth-div -->
					
					<!-- startof auth-div -->
					<div id="auth-div" class="invisible">
						<div class="page-header">
							<h1 id="auth-greetings">Greetings user!</h1>
						</div>
						<p>This application will analyze pages that you and your friends have liked.</p>
						<p>It will then show you with which friends you are most compatible in a page category.</p>
						<div id="auth-error-msgs"></div>
						<!-- startof tabbable -->
						<div class="tabbable">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#tab1" data-toggle="tab">Books</a>
								</li>
								<li>
									<a href="#tab2" data-toggle="tab">Games</a>
								</li>
								<li>
									<a href="#tab3" data-toggle="tab">Movies</a>
								</li>
								<li>
									<a href="#tab4" data-toggle="tab">Music</a>
								</li>
							</ul>
							<div class="tab-content">
								<!-- startof tab1 [books] -->
								<div class="tab-pane active hidden-overflow" id="tab1">
									<p><a id="start-books" href="#" class="btn btn-primary btn-large calcstart">Calculate Books Compatibility »</a></p>
									<div id="bar-books-wrap" class="progress">
										<div id="bar-books" class="bar invisible" style="width: 0%;"></div>
									</div>
									<div id="placeholder-books"></div>
								</div>
								<!-- endof tab1 [books] -->
								
								<!-- startof tab2 [games] -->
								<div class="tab-pane hidden-overflow" id="tab2">
									<p><a id="start-games" href="#" class="btn btn-primary btn-large calcstart">Calculate Games Compatibility »</a></p>
									<div id="bar-games-wrap" class="progress">
										<div id="bar-games" class="bar invisible" style="width: 0%;"></div>
									</div>
									<div id="placeholder-games"></div>
								</div>
								<!-- endof tab2 [games] -->
								
								<!-- startof tab3 [movies] -->
								<div class="tab-pane hidden-overflow" id="tab3">
									<p><a id="start-movies" href="#" class="btn btn-primary btn-large calcstart">Calculate Movies Compatibility »</a></p>
									<div id="bar-movies-wrap" class="progress">
										<div id="bar-movies" class="bar invisible" style="width: 0%;"></div>
									</div>
									<div id="placeholder-movies"></div>
								</div>
								<!-- endof tab3 [movies] -->
								
								<!-- startof tab4 [music] -->
								<div class="tab-pane hidden-overflow" id="tab4">
									<p><a id="start-music" href="#" class="btn btn-primary btn-large calcstart">Calculate Music Compatibility »</a></p>
									<div id="bar-music-wrap" class="progress">
										<div id="bar-music" class="bar invisible" style="width: 0%;"></div>
									</div>
									<div id="placeholder-music"></div>
								</div>
								<!-- endof tab4 [music] -->
							</div>
						</div>
						<!-- endof tabbable -->
					</div>
					<!-- endof auth-div -->
				</div>
				<!-- endof right column -->
				
			</div>
		</div>
		
		<div id="outer-loading-div">
			
		</div>
		
		<script type="application/javascript" src="js/jquery.js"></script>
		<script type="application/javascript" src="js/underscore.js"></script>
		<script type="application/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<script type="application/javascript" src="js/main.js"></script>
	</body>
</html>
